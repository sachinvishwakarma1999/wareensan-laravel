var containerEl = document.querySelector( '.maps-block-part' );
var contentEl = document.querySelector( '.maps-block' );
var workspace = PanZoom( contentEl, containerEl );

function PanZoom ( targetEl, containerEl, opts ) {
    if ( ! ( this instanceof PanZoom ) ) {
        return new PanZoom ( targetEl, containerEl, opts );
    }

    opts = opts || { }

    var shouldCaptureFn = opts.shouldCaptureFn || function ( el ) { return true; };
    var limitToContainer = typeof opts.limitToContainer === 'boolean' ? opts.limitToContainer : true;
    var limitPadding = opts.limitPadding || 50;

    var matrix = getCSSMatrix( targetEl );
    var transform = cssMatrixToTransformObj( matrix );

    var dx = transform.translateX || 0;
    var dy = transform.translateY || 0;
    var scale = 1;
    var active = 0;
    var lastPoints = [ ];
    var containerBounds;

    containerEl.addEventListener( 'mousedown', pointerPressed );
    containerEl.addEventListener( 'touchstart', pointerPressed );
    containerEl.addEventListener( 'wheel', wheelTurned );

    window.addEventListener( 'resize', resized );

    targetEl.style.WebkitTransformOrigin = targetEl.style.transformOrigin = '0 0';

    updateContainerBounds();

    function reset () {
        dx = transform.translateX || 0;
        dy = transform.translateY || 0;
        scale = 1;

        update();
    }

    function updateValues ( newDx, newDy, newScale, targetBounds ) {
        if ( limitToContainer && targetEl !== containerEl && containerBounds ) {
            targetBounds = targetBounds || targetEl.getBoundingClientRect();

            if ( newDx !== dx || newDy !== dy || newScale !== scale ) {
                var scaleDelta = 1 / ( scale / newScale );

                if ( newDx + targetBounds.width * scaleDelta < limitPadding ) {
                    newDx = limitPadding - targetBounds.width * scaleDelta;
                }

                if ( newDx > containerBounds.width - limitPadding ) {
                    newDx = containerBounds.width - limitPadding;
                }

                if ( newDy + targetBounds.height * scaleDelta < limitPadding ) {
                    newDy = limitPadding - targetBounds.height * scaleDelta;
                }

                if ( newDy > containerBounds.height - limitPadding ) {
                    newDy = containerBounds.height - limitPadding;
                }
            }
        }

        dx = newDx;
        dy = newDy;
        scale = newScale;
    }

    function update () {
        targetEl.style.WebkitTransform = targetEl.style.transform = 'translate3d(' + dx + 'px, ' + dy + 'px, 0) scale(' + scale + ')';
    }

    function wheelTurned ( event ) {
        if ( ! shouldCaptureFn( event.target ) ) { return; }
        event.preventDefault();

        var targetBounds = targetEl.getBoundingClientRect();
        var delta = event.deltaY;

        if ( event.deltaMode === 1 ) { // 1 is "lines", 0 is "pixels"
            // Firefox uses "lines" when mouse is connected
            delta *= 15;
        }

        // stop mouse wheel producing huge values
        delta = Math.max( Math.min( delta, 60 ), -60 );

        var scaleDiff = ( delta / 300 ) + 1;
        var map_parent = document.getElementById('map_parent');
        var map_id = document.getElementById('maps-blocks');

        // avoid to-small values
        // 		if ( scale * scaleDiff < 1 ) { return; }
        if ( scale * scaleDiff < 1 ) {
            return;
        }

        if(scale * scaleDiff < 3.5){
            if (event.deltaY < 0){

                var trX = dx - ( event.pageX - targetBounds.left ) * ( scaleDiff - 1 );
                var trY = dy - ( event.pageY - targetBounds.top ) * ( scaleDiff - 1 );
                if(trX < 1 && trY < 1){
                    updateValues(
                        dx - ( event.pageX - targetBounds.left ) * ( scaleDiff - 1 ),
                        dy - ( event.pageY - targetBounds.top ) * ( scaleDiff - 1 ),
                        scale * scaleDiff,
                        targetBounds
                    );
                    update();
                }
            }
            else if(event.deltaY > 0){
                updateValues(
                    dx - ( event.pageX - targetBounds.left ) * ( scaleDiff - 1 ),
                    dy - ( event.pageY - targetBounds.top ) * ( scaleDiff - 1 ),
                    scale * scaleDiff,
                    targetBounds
                );
                update();
            }
        }
    }

    function firstPointerPressed ( event ) {
        document.addEventListener( 'mousemove', pointerMoved );
        document.addEventListener( 'mouseup', pointerReleased );
        document.addEventListener( 'touchmove', pointerMoved );
        document.addEventListener( 'touchend', pointerReleased );
    }

    function pointerPressed ( event ) {
        if ( event.type == 'mousedown' && event.which != 1 ) {
            return;
        }

        if ( ! shouldCaptureFn( event.target ) ) {
            return;
        }

        event.preventDefault();

        lastPoints = getPoints( event );
        active++;

        if ( active === 1 ) {
            firstPointerPressed( event );
        }
    }

    function pointerMoved ( event ) {
        event.preventDefault();

        var points = getPoints( event );
        var averagePoint = points.reduce( getMidpoint );
        var averageLastPoint = lastPoints.reduce( getMidpoint );
        var targetBounds = targetEl.getBoundingClientRect();

        var tmpX = dx + averagePoint.x - averageLastPoint.x;
        var tmpY = dy + averagePoint.y - averageLastPoint.y;

        var map_parent = document.getElementById('map_parent');
        var map_id = document.getElementById('maps-blocks');

        var miwidth =  (map_parent.offsetWidth - targetBounds.width);
        var miheight = (map_parent.offsetHeight - targetBounds.height);

        if ( points[1] ) {
            var scaleDiff = touchDistance( points[0], points[1] ) / touchDistance( lastPoints[0], lastPoints[1] );

            updateValues(
                tmpX - ( averagePoint.x - targetBounds.left ) * ( scaleDiff - 1 ),
                tmpY - ( averagePoint.y - targetBounds.top ) * ( scaleDiff - 1 ),
                scale * scaleDiff,
                targetBounds
            );
        } else {
            if(tmpX < 1 && tmpY < 1 && miwidth < tmpX && miheight < tmpY){
                updateValues( tmpX, tmpY, scale );
            }
            // 			updateValues( tmpX, tmpY, scale );
        }

        update();
        lastPoints = points;
    }

    function pointerReleased ( event ) {
        event.preventDefault();
        active--;
        lastPoints.pop();

        if ( active ) {
            lastPoints = getPoints( event );
            return;
        }

        document.removeEventListener( 'mousemove', pointerMoved );
        document.removeEventListener( 'mouseup', pointerReleased );
        document.removeEventListener( 'touchmove', pointerMoved );
        document.removeEventListener( 'touchend', pointerReleased );
    }

    function updateContainerBounds () {
        containerBounds = containerEl.getBoundingClientRect();
        updateValues( dx, dy, scale );
        update();
    }

    function resized () {
        updateContainerBounds();
    }

    this.reset = reset;
}

function getXY ( obj ) {
    return {
        x: obj.pageX,
        y: obj.pageY
    };
}

function touchDistance ( touch1, touch2 ) {
    var dx = Math.abs( touch2.x - touch1.x );
    var dy = Math.abs( touch2.y - touch1.y );
    return Math.sqrt( dx * dx + dy * dy );
}

function getMidpoint ( point1, point2 ) {
    return {
        x: ( point1.x + point2.x ) / 2,
        y: ( point1.y + point2.y ) / 2
    };
}

function getPoints ( event ) {
    if ( event.touches ) {
        return Array.prototype.map.call( event.touches, getXY );
    }
    else {
        return [ getXY( event ) ];
    }
}

function getCSSMatrix ( el ) {
    var style = window.getComputedStyle( el );

    return style.getPropertyValue( '-webkit-transform' ) ||
        style.getPropertyValue( '-moz-transform' ) ||
        style.getPropertyValue( '-ms-transform' ) ||
        style.getPropertyValue( '-o-transform' ) ||
        style.getPropertyValue( 'transform' );
}

function cssMatrixToTransformObj ( matrix ) {
    // this happens when there was no rotation yet in CSS
    if ( matrix === 'none' ) {
        matrix = 'matrix(0,0,0,0,0)';
    }

    var obj = { };
    var values = matrix.match( /([-+]?[\d\.]+)/g );

    obj.rotate = ( Math.round(
            Math.atan2(
                parseFloat( values[1] ),
                parseFloat( values[0] ) ) * ( 180 / Math.PI )
        ) || 0
    ).toString() + 'deg';

    obj.translateStr = values[5] ? values[4] + 'px, ' + values[5] + 'px' : ( values[4] ? values[4] + 'px' : '' );

    obj.translateX = parseFloat( values[4] );
    obj.translateY = values[5] ? parseFloat( values[5] ) : 0;

    return obj;
}

$(document).ready(function () {
    var count = 0;
    // $('#exhumation-table').load( function () {
    //     alert("sdfs");
    // });

    // $('#exhumation-table').load('url/to/wherever', function() {
    //     $("#exhumation-table td").each(function() {
    //         var rowId = $(this).att('sdval');
    //
    //     });
    // });

});
