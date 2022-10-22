@extends('layouts.app')

{{-- set title --}}
@section('title', 'Request Event')

@section('content')

<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- error --}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">request_event</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">request_event</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- table card --}}
            {{-- @can('request_event_table') --}}
                <div class="content-body">
                    <section id="table-home">
                        <!-- Zero configuration table -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Request event List</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered text-inputs-searching default-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Name</th>
                                                            <th>User</th>
                                                            <th>Role</th>
                                                            <th>Instance</th>
                                                            <th>Category</th>
                                                            <th>Link</th>
                                                            <th>Date</th>
                                                            <th>Description</th>
                                                            <th>Poster</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($request_event as $key => $request_event_item)
                                                            <tr data-entry-id="{{ $request_event_item->id }}">
                                                                <td>{{ isset($request_event_item->created_at) ? date("d/m/Y H:i:s",strtotime($request_event_item->created_at)) : '' }}</td>
                                                                <td>{{ $request_event_item->name ?? '' }}</td>
                                                                <td>{{ $request_event_item->user->name ?? '' }}</td>
                                                                <td>{{ $request_event_item->role ?? '' }}</td>
                                                                <td>{{ $request_event_item->instance ?? '' }}</td>
                                                                <td>{{ $request_event_item->category ?? '' }}</td>
                                                                <td>{{ $request_event_item->invite_grup_link ?? '' }}</td>
                                                                <td>{{ $request_event_item->date_is_held ?? '' }}</td>
                                                                <td>{{ $request_event_item->description ?? '' }}</td>
                                                                <td>{{ $request_event_item->poster ?? '' }}</td>
                                                                <td>
                                                                    @if($request_event_item->level == 1)
                                                                        <span class="badge badge-info">{{ 'Low' }}</span>
                                                                    @elseif($request_event_item->level == 2)
                                                                        <span class="badge badge-warning">{{ 'Medium' }}</span>
                                                                    @elseif($request_event_item->level == 3)
                                                                        <span class="badge badge-danger">{{ 'High' }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ isset($request_event_item->date) ? date("d/m/Y",strtotime($request_event_item->date)) : '' }}</td>
                                                                <td>{{ isset($request_event_item->time) ? date("H:i:s",strtotime($request_event_item->time)) : '' }}</td>
                                                                <td>
                                                                    @if($request_event_item->status == 1)
                                                                        <span class="badge badge-success">{{ 'Payment Completed' }}</span>
                                                                    @elseif($request_event_item->status == 2)
                                                                        <span class="badge badge-warning">{{ 'Waiting Payment' }}</span>
                                                                    @else
                                                                        <span>{{ 'N/A' }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            {{-- not found --}}
                                                        @endforelse
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Name</th>
                                                            <th>User</th>
                                                            <th>Role</th>
                                                            <th>Instance</th>
                                                            <th>Category</th>
                                                            <th>Link</th>
                                                            <th>Date</th>
                                                            <th>Description</th>
                                                            <th>Poster</th
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            {{-- @endcan --}}

        </div>
    </div>
<!-- END: Content-->

@endsection

@push('after-script')
    <script>
        $('.default-table').DataTable( {
            "order": [],
            "paging": true,
            "lengthMenu": [ [5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"] ],
            "pageLength": 10
        });
    </script>
@endpush
