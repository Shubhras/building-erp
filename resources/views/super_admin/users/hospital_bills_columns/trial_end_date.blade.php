<div class="badge bg-light-info">
    <div class="mb-2 table-font">{{ \Carbon\Carbon::parse($row->trial_ends_at)->isoFormat('LT')}}</div>
    <div class="sub-heading">{{ \Carbon\Carbon::parse($row->trial_ends_at)->isoFormat('Do MMM, Y')}}</div>
</div>
