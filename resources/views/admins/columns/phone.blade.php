@if($row->phone)
<div class="sub-heading">{{ $row->phone }}</div>
@else
    {{ __('messages.common.n/a') }}
@endif
