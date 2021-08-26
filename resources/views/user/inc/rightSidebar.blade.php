<div class="col-lg-8 col-md-8 col-sm-12 vh-60">
    <div class="card z-depth-3 shadow">
        <div class="card-body">
            @include('user.inc.rightSidebar.tabLinks')
            <div class="tab-content p-3">
                @include('user.inc.rightSidebar.profileTab')
                @include('user.inc.rightSidebar.filesTab')
                {{-- @include('user.inc.rightSidebar.filesTab') --}}
                @include('user.inc.rightSidebar.editTab')
            </div>
        </div>
    </div>
</div>
