@foreach ($projects as $project)
<div class="col-12 col-md-6 col-lg-4 my-3 p-2">
    <div class="card">
        <a href="ProjectDetails.php">
            <img src="{{ $project->image_path }}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <h4 class="card-title">{{ $project->name }}</h4>

            <a href="ProjectDetails.php" class="btn btn-primary">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>
</div>
@endforeach