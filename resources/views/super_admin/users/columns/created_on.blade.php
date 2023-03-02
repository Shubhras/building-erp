{{--<div class="badge bg-light-info sub-heading">
    <div class="mb-2" style="font-weight:700;">{{ \Carbon\Carbon::parse($row->created_at)->isoFormat('LT')}}</div>
    <div>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('jS M, Y')}}</div>
</div>--}}
<div class="d-flex align-items-center badge bg-light-info">
    <div class="d-flex flex-column">
        <div class="text-decoration-none mb-1 show-btn table-font "
          >{{ \Carbon\Carbon::parse($row->created_at)->isoFormat('LT')}}</div>
          <div class="sub-heading">{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('jS M, Y')}}</div>
    </div>
</div>
