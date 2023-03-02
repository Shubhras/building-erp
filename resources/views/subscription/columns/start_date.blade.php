<div class="badge bg-light-info sub-heading">
    <div class="mb-2 table-font">{{ \Carbon\Carbon::parse($row->starts_at)->isoFormat('LT')}}</div>
    <div class="sub-heading">{{ \Carbon\Carbon::parse($row->starts_at)->isoFormat('Do MMM, Y')}}</div>
</div>
