<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Applications for {{$job->job_title}}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Applications for {{$job->job_title}}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                @if($applications->count() > 0)
                <div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
                        <thead class="bg-blue-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Count</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Application ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submitted At</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submitted By</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Resume</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php
                            $i=1;
                            @endphp
                            @foreach ($applications as $application)
                            @php
                            $resume_filename = substr($application->resume, strpos($application->resume,'_')+1);
                            @endphp
                            <tr>
                                <th scope="row" class="px-6 py-4 whitespace-nowrap">{{$i++}}</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->status}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->created_at->diffForHumans()}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->applicant->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ url($application->resume) }}" target="_blank">{{$resume_filename}}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    This is for the action buttons
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">No active applications yet.</h5>
                                    <p class="card-text">There are currently no applications for this job opening.</p>
                                </div>
                            </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </body>

    </html>
    </div>

</x-app-layout>