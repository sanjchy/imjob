<div class="tab-pane active show" id="profile">
    <div class="container-fluid">
        {{-- Education && Experience row --}}
        <div class="row">
            @include('candidate.inc.rightSidebar.profile.education')
            @include('candidate.inc.rightSidebar.profile.experience')
        </div>
        {{-- SKILLS ROW --}}
        <div class="row d-flex p-0 my-3">
            @include('candidate.inc.rightSidebar.profile.software')
            @include('candidate.inc.rightSidebar.profile.professional')
            @include('candidate.inc.rightSidebar.profile.language')
        </div>
    </div>
</div>
