<div class="badge bg-light-info">
    <div class="mb-2  table-font">{{ \Carbon\Carbon::parse($row->strats_at)->isoFormat('LT')}}</div>
    <div class="sub-heading">{{ \Carbon\Carbon::parse($row->strats_at)->isoFormat('Do MMMM YYYY')}}</div>
</div>
