<div class="modal fade" tabindex="-1" id="generateJobRequestUrl" role="dialog" aria-labelledby="generateJobRequestUrl"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span>Send Job Request Form to <span class="text-primary">{{ ucwords($company->name) }}</span></span>
            </div>
            <div class="modal-body py-2 px-3">
                <div class="container">
                    <a id="signature" target="_blank"></a>
                </div>
                <div class="container">
                    <div class="form-group row">
                        <label for="language" class="col-sm-6 col-form-label">Select form language</label>
                        <div class="col-sm-6">
                            <select name="language" id="language" class="form-control">
                                <option value="en">English</option>
                                <option value="it">Italian</option>
                                <option value="rs">Serbian</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary"
                        onclick="generateSignature($('#language').val(),{{ $company->id }})"
                        id="generateSignatureFormSubmitButton">Generate</button>
                </div>
                <script>
                    function generateSignature(language,company) {
                            $.ajaxSetup({
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                }
                            });
                            $.ajax({
                                type: "GET",
                                data: {
                                    language: language,
                                    company: company,
                                },
                                url: "/company/" + company + "/signature",
                                success: function (data) {
                                        $("#signature").attr("href",data.signature);
                                        $("#signature").html(data.signature);
                                }
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</div>
