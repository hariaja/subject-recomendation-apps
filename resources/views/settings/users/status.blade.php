@if($status == AccountStatus::ACTIVE->value)
<a href="javascript:void" data-uuid="{{ $uuid }}" class="text-dark me-2 status-users"><i class="fa fa-sm fa-ban me-2"></i>{{ trans('Non-aktifkan') }}</a>
@else
<a href="javascript:void" data-uuid="{{ $uuid }}" class="text-success me-2 status-users"><i class="fa fa-sm fa-check-circle me-2"></i>{{ trans('Aktifkan') }}</a>
@endif
