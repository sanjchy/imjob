<div class="card z-depth-3 shadow-none mt-sm-5 mt-md-5 mt-lg-0">
    <div class="card-body px-1">
        <div class="container px-4 no-print">
            @include('candidate.inc.rightSidebar.tabLinks')
        </div>
        <div class="tab-content p-3">
            @include('candidate.inc.rightSidebar.profileTab')
            {{-- @include('candidate.inc.rightSidebar.education') --}}
            {{-- @include('candidate.inc.rightSidebar.experience') --}}
            @include('candidate.inc.rightSidebar.notes')
            @include('candidate.inc.rightSidebar.filesTab')
            @include('candidate.inc.rightSidebar.editTab')
            @include('candidate.inc.rightSidebar.assignedJobs')
        </div>
    </div>
</div>
