<div class="d-flex align-items-center">
    <a href="javascript:void(0)" data-id="{{ $row->id }}" class="show-btn">
        <div class="image image-mini me-3">
            <img src="{{$row->image_url}}" alt="user" class="user-img image rounded-circle object-contain">
        </div>
    </a>
    
    <div class="d-flex flex-column">
        <a href="javascript:void(0)" class="mb-1 show-user-btn text-decoration-none table-font" data-id="{{ $row->id }}">
            {{$row->full_name}}
        </a>
        <span class="fs-6 sub-heading">{{$row->email}}</span>
    </div>
</div>
