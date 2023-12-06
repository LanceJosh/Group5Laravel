<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My applications') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Applications</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
                        <thead class="bg-blue-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Count</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submission ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Job title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submitted At</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Resume</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($my_applications as $application)
                            @php
                            $i=1;
                            $resume_filename = substr($application->resume, strrpos($application->resume,'_')+1);
                            @endphp
                            <tr>
                                <th scope="row" class="px-6 py-4 whitespace-nowrap">{{$i++}}</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->job->job_title}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->status}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->created_at->diffForHumans()}}</td>
                                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ url($application->resume) }}" target="_blank">{{$resume_filename}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </body>

    </html>
    </div>

</x-app-layout>