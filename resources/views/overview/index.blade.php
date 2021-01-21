@extends('layouts.app')

@section('content_header')
    <h4 class="title">Overview</h4>
@endsection
@section('content')
    <div class="tabs-part">
        <ul class="nav nav-tabs nav-bordered customtab">
            <li class="nav-item">
                <a href="#overviewTab" data-toggle="tab" aria-expanded="false" class="nav-link active">
                    <span class="d-none d-lg-block">Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#registrationTab" data-toggle="tab" aria-expanded="false" class="nav-link">
                    <span class="d-none d-lg-block">Registration</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#exhumantionReinternmentTab" data-toggle="tab" aria-expanded="false" class="nav-link">
                    <span class="d-none d-lg-block">Exhumation/Reinternment</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="overviewTab">
                @include('overview.partials.tabs.overview')
            </div>
            <div class="tab-pane" id="registrationTab">
                @include('overview.partials.tabs.registration', compact([
            'number_appointment',
            'number_waiting',
            'number_verified',
            'number_completed',
            'number_walk'
        ]))
            </div>
            <div class="tab-pane" id="exhumantionReinternmentTab">
                @include('overview.partials.tabs.exhumantion')
            </div>
        </div>
    </div>

    @include('overview.partials.modals.claimant')
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
    
@endsection
