<!-- Modal -->
<div class="modal fade" id="assignJob" tabindex="-1" role="dialog" aria-labelledby="assignJobModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignJobModal">Assign Job To
                    <span class="text-primary">
                        {{ $candidate->firstName }}
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <table id="jobDatatable" class="table table-responsive table-hover table-bordered text-nowrap shadow-sm"
                    style="min-width:100%">
                    <thead class="bg-light">
                        <tr class="text-dark font-weight-bold text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Place of Work</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Job::all() as $job)
                        @if (!\App\Models\Recruitment::where('candidate_id', $candidate->id)->where('job_id',
                        $job->id)->first())
                        <tr class="text-center" id="job{{ $job->id }}">
                            <td>{{ $job->id }}</td>
                            <td>
                                <a href="{{ route('company.show',$job->company->id) }}" class="text-primary">
                                    <span>
                                        {{ $job->company->name }}
                                    </span>
                                </a>
                            </td>
                            <td class="font-weight-bolder text-dark">
                                <a
                                    href="{{ route('job.show',$job->id,app()->getLocale()) }}">{{ $job->requiredProfession }}</a>
                            </td>
                            <td class="font-weight-bold text-dark">{{ $job->placeOfWork }}</td>
                            {{-- <td>{{ $job->salary }}</td>
                            <td><span class="badge badge-info p-2">{{ $job->workingHours }}</span></td>
                            <td>{{ $job->shifts }}</td>
                            <td>
                                @if (strtolower($job->avaliableNow) == 'yes')
                                <span class="badge badge-success p-2">{{ ucwords($job->avaliableNow) }}</span>
                                @else
                                <span class="badge badge-danger p-2">{{ ucwords($job->avaliableNow) }}</span>
                                @endif
                            </td>
                            <td>
                                @if (isset($job->availabilityDate) && !empty($job->availabilityDate))
                                {{ date('M. Y',strtotime($job->availabilityDate)) ?? '<span class="text-muted">Not Defined</span>'}}
                                @else
                                <span class="text-muted">Not Defined</span>
                                @endif
                            </td> --}}
                            {{-- <td>
                                                                    <a class="btn btn-sm btn-outline-success showJobDescription"
                                                                        data-toggle="popover" data-content="{{ $job->jobDescription }}"
                            data-id="{{ $job->id }}"
                            data-header="{{ $job->requiredProfession }}">
                            Check
                            </a>
                            </td> --}}
                            {{-- Candidate --}}
                            {{-- <td>
                                                                    <a class="btn btn-sm btn-outline-success showJobCandidate"
                                                                        data-toggle="popover"
                                                                        data-qualification="{{ $job->candidateQualification }}"
                            data-age="{{ $job->candidateAge }}"
                            data-education="{{ $job->candidateEducation }}"
                            data-work-experience="{{ $job->candidateWorkExperience }}"
                            data-language="{{ $job->language }}"
                            data-other-language="{{ $job->candidateOtherLanguage }}"
                            data-computer-skills="{{ $job->candidateComputerSkills }}"
                            data-driving-licence="{{ $job->candidateDrivingLicence }}"
                            data-means-of-transport="{{ $job->candidateMeansOfTransport }}">
                            Preview
                            </a>
                            </td> --}}
                            {{-- End Candidate --}}
                            {{-- Accomodations --}}
                            {{-- <td>
                                                                    @if (strtolower($job->accomodations) == 'yes')
                                                                    <a data-toggle="popover"
                                                                        class="btn btn-sm btn-outline-success showJobAccomodations"
                                                                        data-job="{{ $job->requiredProfession }}"
                            data-pays="{{ $job->accomodationsPays }}"
                            data-price="{{ $job->accomodationsCosts }}">
                            <span>Preview</span>
                            </a>
                            @else
                            <a data-toggle="popover" class="btn btn-sm btn-outline-danger showJobAccomodations"
                                data-job="{{ $job->requiredProfession }}" data-pays="{{ $job->accomodationsPays }}"
                                data-price="{{ $job->accomodationsCosts }}">
                                <span>Preview</span>
                            </a>
                            @endif
                            </td> --}}
                            {{-- End Accomodations --}}
                            {{-- <td><span
                                                                        class="badge badge-warning">{{ ucwords($job->corporateInsertion) }}</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-outline-success jobShowContractDetails" data-toggle="popover"
                                    data-title="Contract Type : {{ $job->contractDetails }}" data-content="Fixed Term : {!! $job->fixedTerm . '<br>'!!}
                                                                        Part Time : {{ $job->partTime }}"
                                    data-html="true" role="button">Check</a>
                            </td>
                            <td>
                                <a class="'btn btn-sm btn-outline-success showJobAdditionalInformation"
                                    data-toggle="popover" data-content="{{ $job->additionalJobInformation }}">Check</a>
                            </td> --}}
                            {{-- <td>
                                                                    <a class="'btn btn-sm btn-outline-success showJobDescriptionOfTheStaffRequest"
                                                                        data-toggle="popover" data-title="Description" data-html="true"
                                                                        data-placement="top"
                                                                        data-content="{{ $job->descriptionOfStaffRequest }}">Check</a>
                            </td> --}}
                            <td>
                                <a onclick="assignJobToCandidate({{ $candidate->id }},{{ $job->id }})" class="">
                                    <i class="fi-rr-check other-data fa-lg"></i>
                                </a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
