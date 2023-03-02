<div class="badge bg-light-info sub-heading">
    <div class="mb-2 table-font">{{ \Carbon\Carbon::parse($row->ends_at)->isoFormat('LT')}}</div>
    <div>{{ \Carbon\Carbon::parse($row->ends_at)->isoFormat('Do MMM, Y')}}</div>
</div>
