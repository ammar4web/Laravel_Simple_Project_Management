@csrf

<div class="form-group">
    <label for="title">عنوان المشروع</label>
    {{-- <input type="text" name="title" id="title" class="form-control" value="{{ $project->title ?? "" }}"> --}}
    <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}">
</div>

<div class="form-group mt-4">
    <label for="description">وصف المشروع</label>
    {{-- <textarea name="description" id="description" class="form-control">{{ $project->description ?? "" }}</textarea> --}}
    <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
</div>
