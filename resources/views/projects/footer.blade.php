<div class="card-footer">
    <div class="d-flex">
        <div class="d-flex align-items-center">
            <img src="/images/clock.svg" alt="">
            <div class="mr-2">
                {{-- created_at->diffForHumans() --}}
                {{-- to shows the elapsed time between project creation and now. --}}
                {{ $project->created_at->diffForHumans() }}
            </div>
        </div>

        <div class="d-flex align-items-center">
           <img src="/images/list-check.svg" alt="">
            <div class="mr-2">
            </div>
        </div>
        <div class="d-flex align-items-center mr-auto">
            <form action="/projects/{project}" method="POST">
                @method("DELETE")
                @csrf
                <input type="submit">
            </form>
        </div>
    </div>
</div>