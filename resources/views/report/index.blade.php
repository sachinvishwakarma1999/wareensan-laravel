@extends('layouts.app')

@section('content_header')
    <h4 class="title">Reports</h4>
@endsection 
@section('content')
    <div class="tabs-part">
        <div class="tab-content">
            <div class="tab-pane show active" id="overviewTab">
                @include('report.partials.tabs.report')
            </div>
            <div class="tab-pane" id="registrationTab">
                @include('report.partials.tabs.registration', compact([
            'number_appointment',
            'number_waiting',
            'number_verified',
            'number_completed',
            'number_walk'
        ]))
            </div>
            <div class="tab-pane" id="exhumantionReinternmentTab">
                @include('report.partials.tabs.exhumantion')
            </div>
        </div>
    </div>

    @include('report.partials.modals.claimant')
@endsection

@section('footer_script')
    <script type="application/javascript">
        $(function () {

            var tableRegistration = $('.registration_table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                paging: false,
                searching: false,
                lengthChange: false,
                order: [[0, 'desc']],
                ajax: {
                    url: "{{ route('overview.claimantdatatable') }}",
                    data: function (d) {
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'status', name: 'status'},
                    {data: 'passport_no', name: 'passport_no'},
                    {data: 'claimant_name', name: 'claimant_name'},
                    {data: 'deceased_name', name: 'deceased_name'},
                    {data: 'dod', name: 'dod'},
                    {data: 'block', name: 'block'},
                    {data: 'plot', name: 'plot'},
                    {data: 'session', name: 'session'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $("#btnSearch").click(function( e ){
                e.preventDefault();
                table.draw();
            });


            $('#addBtnForm').click(function (e) {
                let msgError = $('#msgError');
                let btnAddForm = $('#addBtnForm');

                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                btnAddForm.html(' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>\n' +
                    'Saving...');

                $.ajax({
                    url: "{{ route('overview.add.claimant') }}",
                    method: 'post',
                    data: $('#addClaimantForm').serialize(),
                    success: function (data) {
                        $('#addNewClaimantModal').modal('toggle');
                        btnAddForm.html('Save Changes');
                        tableRegistration.ajax.reload();
                    },
                    error: function (data) {
                        msgError.html('');

                        let errors = $.parseJSON(data.responseText);
                        let errHtml = '<div class="alert alert-danger"><ul>';

                        $.each(errors.messages, function (key, value) {
                            errHtml += '<li>' + value + '</li>';
                        });
                        errHtml += '</ul></div>';
                        msgError.html(errHtml);

                        btnAddForm.html('Save Changes');
                    }
                });
            });

            new Chart(document.getElementById("exhumation-summary"), {
                type: 'pie',
                data: {
                    labels: ["Unexhumed", "Exhumed", "No Show"],
                    datasets: [{
                        // label: "Population (millions)",
                        backgroundColor: ["#8CC989", "#F2C924","#FF3F39"],
                        data: [70,30,5]
                    }]

                },
                options: {
                    title: {
                        display: false,
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                            }
                        }
                    }
                }
            });

            // claims-summary
            new Chart(document.getElementById("claims-summary"), {
                type: 'pie',
                data: {
                    labels: ["Principal", "Supplementary"],
                    datasets: [{
                        // label: "Population (millions)",
                        backgroundColor: ["#8CC989", "#F2C924"],
                        data: [80,20]
                    }]
                },
                options: {
                    title: {
                        display: false,
                    }
                }
            });

            // reinternment-summary
            // new Chart(document.getElementById("reinternment-summary"), {
            //     type: 'pie',
            //     data: {
            //         labels: ["Principal", "Supplementary"],
            //         datasets: [{
            //             // label: "Population (millions)",
            //             backgroundColor: ["#8CC989", "#F2C924"],
            //             data: [75,25]
            //         }]
            //     },
            //     options: {
            //         title: {
            //             display: false,
            //         }
            //     }
            // });

            // timeline-bar-chart
            Morris.Bar({
                element: 'timeline-bar-chart',
                data: [{
                    y: 'Jan',
                    claimed: 100,
                    exhumed: 200,
                    reintered: 300
                }, {
                    y: 'Feb',
                    claimed: 101,
                    exhumed: 201,
                    reintered: 301
                }, {
                    y: 'Mar',
                    claimed: 190,
                    exhumed: 470,
                    reintered: 350
                },{
                    y: 'Apr',
                    claimed: 0,
                    exhumed: 470,
                    reintered: 350
                },{
                    y: 'May',
                    claimed: 0,
                    exhumed: 300,
                    reintered: 220
                },{
                    y: 'Jun',
                    claimed: 0,
                    exhumed: 470,
                    reintered: 420
                },{
                    y: 'Jul',
                    claimed: 0,
                    exhumed: 280,
                    reintered: 270
                },{
                    y: 'Aug',
                    claimed: 50,
                    exhumed: 420,
                    reintered: 460
                }, {
                    y: 'Sep',
                    claimed: 0,
                    exhumed: 420,
                    reintered: 470
                }, {
                    y: 'Oct',
                    claimed: 0,
                    exhumed: 0,
                    reintered: 0
                }, {
                    y: 'Nov',
                    claimed: 0,
                    exhumed: 0,
                    reintered: 0
                }, {
                    y: 'Dec',
                    claimed: 0,
                    exhumed: 0,
                    reintered: 0
                }],
                xkey: 'y',
                ykeys: ['claimed', 'exhumed', 'reintered'],
                labels: ['Claimed', 'Exhumed', 'Reintered'],
                barColors:['#C186D0', '#439DF5', '#F0C000'],
                hideHover: 'auto',
                gridLineColor: '#eef0f2',
                resize: true
            });

        });
    </script>
    <script type="text/javascript">
    $(function () {
        "use strict";
        // claims-summary
        new Chart(document.getElementById("claim-summary"), {
            type: 'pie',
            data: {
              labels: ["Principal", "Supplementary"],
              datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#BB7DCB", "#499FF2"],
                data: [80,20]
              }]
            },
            options: {
              title: {
                display: false,
              }
            }
        });

        // claims-summary-bar-chart
        Morris.Bar({
            element: 'claim-bar-chart',
            data: [{
                y: 'BLK 19',
                principal: 2,
                supplementary: 0
            }, {
                y: 'BLK 20',
                principal: 2,
                supplementary: 0
            }, {
                y: 'BLK 06',
                principal: 4,
                supplementary: 0
            },{
                y: 'BLK 07',
                principal: 4,
                supplementary: 0
            },{
                y: 'BLK 08',
                principal: 1,
                exhumed: 0
            },{
                y: 'BLK 09',
                principal: 1,
                supplementary: 0
            },{
                y: 'BLK 10',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 11',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 12',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 13',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 14',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 15',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 16',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 17',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 18',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 21',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 22',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 23',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 24',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 25',
                principal: 0,
                supplementary: 4
            }],
            xkey: 'y',
            ykeys: ['principal', 'supplementary'],
            labels: ['Principal', 'Supplementary'],
            barColors:['#BB7DCB', '#439DF5'],
            hideHover: 'auto',
            gridLineColor: '#eef0f2',
            resize: true
        });

        // claims-timeline-bar-chart
        // Bar chart
        new Chart(document.getElementById("claims-timeline"), {
            type: 'bar',
            data: {
              labels: ["02/10", "03/10", "04/10", "05/10", "06/10","07/10","08/10","09/10","10/10","11/10","12/10","13/10","14/10","15/10","16/10","17/10","18/10","19/10","20/10","21/10","22/10","23/10","24/10","25/10","26/10","27/10","28/10","29/10","30/10","31/10"],
              datasets: [
                {
                  label: "Principal",
                  backgroundColor: ["#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB"],
                  data: [5,1,6,18,14,1,0,1,3,8,13,16,2,2,0,0,10,10,0,1,3,0,1,3,13,16,0,1,1,0]
                },
                {
                  label: "Supplementary",
                  backgroundColor: ["#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5"],
                  data: [2,1,7,23,12,1,0,1,2,9,14,14,1,1,0,0,10,10,0,1,2,0,1,2,14,14,0,1,1,0]
                }
              ]
            },
            options: {
              legend: { display: true },
              title: {
                display: false,
              }
            }
        });
    }); 
</script>
    
@endsection
