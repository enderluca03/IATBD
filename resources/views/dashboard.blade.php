<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Naar de homepagina</p>
                    <a href="{{ route('dashboard') }}">Home</a>
                </div>
                @if ($user->role != "user")
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Naar verwijderen</p>
                    <a href="{{ route('remove')}}">Verwijder</a>
                </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Nieuwe verzoeken</p>
                    @foreach ($requests as $request)
                    <section class="animalRequests">
                        <p>{{ $animalNames[$request->id] }}</p>
                        <form method="post" class="accept2" name="accept2" id="accept2" enctype="multipart/form-data" action="{{ route('animals.accept2') }}">
                            @csrf
                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                            <input type="submit" id="submit" value="Accepteer">
                        </form>
                    </section>
                @endforeach
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Reviews</h2>
                    @foreach ($feedbacks as $feedback)
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            @php
                                $animal = $animals->firstWhere('animalID', $feedback->animal);
                                $animalName = $animal ? $animal->name : 'N/A';
                            @endphp
                            <p>Dier: {{ $animalName }}</p>
                            <p>Rating: {{ $feedback->rate }}</p>
                            <p>Feedback: {{ $feedback->feedback }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
