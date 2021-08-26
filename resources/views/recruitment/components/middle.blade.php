<style>
    #max-height {
        min-height: 91vh;
        max-height: 91vh;
        overflow-y: scroll;
        overflow-x: auto;
    }

    #max-height::-webkit-scrollbar {
        width: 1em;
    }

    #max-height::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #max-height::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid #dee5eb;
    }

</style>
<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 py-0 px-3" id="max-height">
    @include('recruitment.components.includes.companyContainer')
    @include('recruitment.components.includes.jobContainer')
</div>
