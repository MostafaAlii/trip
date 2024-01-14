<div class="mb-1 btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">{{ trans('general.processes') }}</button>
    <div class="dropdown-menu">
        @if(get_user_data()->id == $captain->callcenter_id)
            <a href="{{ route('CallCenterCaptains.show', $captain->profile->uuid) }}"
               class="modal-effect btn btn-sm btn-dark dropdown-item" style="text-align: center !important">
            <span class="icon text-info text-dark">
                <i class="fa fa-edit"></i>
                Profile
            </span>
            </a>
        @endif

        <a href="{{ route('CallCenterCaptains.trips',  $captain->profile->uuid) }}"
            class="modal-effect btn btn-sm btn-dark dropdown-item" style="text-align: center !important">
            <span class="icon text-info text-dark">
                <i class="fa fa-edit"></i>
                My Trips
            </span>
        </a>

        <a href="{{ route('CallCenterCaptains.captainNewCar',  $captain->id) }}"
            class="modal-effect btn btn-sm btn-dark dropdown-item" style="text-align: center !important">
            <span class="icon text-info text-dark">
                <i class="fa fa-edit"></i>
                New Car
            </span>
        </a>

            @if(auth('call-center')->user()->type == "manager")
            <button type="button" class="modal-effect btn btn-sm btn-danger dropdown-item" style="text-align: center !important" data-toggle="modal" data-target="#delete{{$captain->id}}" data-effect="effect-scale">
            <span class="icon text-danger text-bold">
                <i class="fa fa-trash"></i>
                {{ trans('general.delete') }}
            </span>
            </button>

                <button type="button" class="modal-effect btn btn-sm btn-primary dropdown-item" style="text-align: center !important"
                        data-toggle="modal" data-target="#updatePassword{{$captain->id}}" data-effect="effect-scale">
            <span class="icon text-dark text-bold">
                <i class="fa fa-edit"></i>
                Update Password
            </span>
                </button>


                <button type="button" class="modal-effect btn btn-sm btn-dark dropdown-item" style="text-align: center !important" data-toggle="modal" data-target="#SendNotification{{$captain->id}}" data-effect="effect-scale">
            <span class="icon text-info text-bold">
                <i class="fa fa-bell"></i>
                Send Notifictation
            </span>
                </button>
            @endif

        {{--<button type="button" class="modal-effect btn btn-sm btn-success dropdown-item"
                    style="text-align: center !important" data-toggle="modal" data-target="#newCar{{$captain->id}}"
                    data-effect="effect-scale">
            <span class="icon text-dark text-bold">
                <i class="fa fa-edit"></i>
                New Car
            </span>
        </button>--}}
    </div>
</div>
@include('dashboard.call-center.captains.btn.modals.newCar')
@include('dashboard.admin.captains.btn.modals.destroy')
@include('dashboard.admin.captains.btn.modals.notifications')
@include('dashboard.admin.captains.btn.modals.updatePassword')
