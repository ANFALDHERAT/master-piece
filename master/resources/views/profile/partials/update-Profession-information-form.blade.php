<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Beauty Experts') }}
        </h2>
{{--
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your professional information.") }}
        </p> --}}
    </header>

    <form method="post" action="{{ route('ProfessionalUpdate') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="flex">
            <div class="w-1/3">
                <div>
                    @if ($professionalInfo->name)
                        <img src="{{ url('/assets/images/' . $professionalInfo->image1) }}" alt="{{ $professionalInfo->name }}'s Profile Picture" class="img-fluid max-w-200 h-auto">
                    @else
                        <img src="{{ asset('assets1/images/Capture.PNG')}}" alt="Default Profile Picture" class="img-fluid max-w-200 h-auto">
                    @endif

                    <div class="form-group mt-3">
                        <label for="image">{{ __('Upload new image') }}</label>
                        <input id="image1" name="image1" type="file" accept="image/*" class="form-control-file" :value="old('image1', $professionalInfo->image)" autocomplete="image1" />
                        <x-input-error class="mt-2" :messages="$errors->get('image1')" />
                    </div>
                </div>
            </div>
            <div class="w-2/3 space-y-4">

                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" :value="old('name', $professionalInfo->name)" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />

                <!-- Other fields... -->



                    <div>
                        <x-input-label for="password" :value="__('password')" />
                        <x-text-input id="password" name="password" type="text" class="mt-1 block w-full" :value="old('password', $professionalInfo->password)" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('password')" />
                    </div>

                    <div>
                        <x-input-label for="address" :value="__('address')" />
                        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $professionalInfo->address)" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    <div>
                        <x-input-label for="services_offered" :value="__('services_offered')" />
                        <x-text-input id="services_offered" name="services_offered" type="text" class="mt-1 block w-full" :value="old('services_offered', $professionalInfo->services_offered)" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('services_offered')" />
                    </div>

                    <div>
                        <x-input-label for="average_rating" :value="__('average_rating')" />
                        <x-text-input id="average_rating" name="average_rating" type="text" class="mt-1 block w-full" :value="old('average_rating', $professionalInfo->average_rating)" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('average_rating')" />
                    </div>


                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $professionalInfo->description)" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </div>

                    {{-- <div>
                        <x-input-label for="profission" :value="__('Profession')" />
                        <x-text-input id="profission" name="profission" type="text" class="mt-1 block w-full" :value="old('profission', $professionalInfo->profission)" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('profission')" />
                    </div> --}}

                    <div>
                        <x-input-label for="email" :value="__('Work Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $professionalInfo->email)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div>
                        <x-input-label for="service_area" :value="__('Work Location')" />
                        <x-text-input id="service_area" name="service_area" type="text" class="mt-1 block w-full" :value="old('service_area', $professionalInfo->service_area)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('service_area')" />
                    </div>

                    {{-- <div>
                        <x-input-label for="cv" :value="__('CV')" />
                        <x-text-input id="cv" name="cv" type="text" class="mt-1 block w-full" :value="old('cv', $professionalInfo->cv)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('cv')" />
                    </div> --}}


                    <div>
                        <x-input-label for="expertise" :value="__('Years of experience')" />
                        <x-text-input id="expertise" name="expertise" type="text" class="mt-1 block w-full" :value="old('expertise', $professionalInfo->expertise)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('expertise')" />
                    </div>

                    {{-- <div>
                        <x-input-label for="age" :value="__('Your age')" />
                        <x-text-input id="age" name="age" type="text" class="mt-1 block w-full" :value="old('age', $professionalInfo->age)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('age')" />
                    </div> --}}

                    <div>
                        <x-input-label for="price" :value="__('Price per hour')" />
                        <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price', $professionalInfo->price)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('price')" />
                    </div>

                    {{-- <div>
                        <x-input-label for="completed_jobs" :value="__('Completed jobs')" />
                        <x-text-input id="completed_jobs" name="completed_jobs" type="text" class="mt-1 block w-full" :value="old('completed_jobs', $professionalInfo->completed_jobs)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('completed_jobs')" />
                    </div> --}}

                    <div>
                        <x-input-label for="working_hours" :value="__('Hours of work')" />
                        <x-text-input id="working_hours" name="working_hours" type="text" class="mt-1 block w-full" :value="old('working_hours', $professionalInfo->working_hours)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('working_hours')" />
                    </div>

                    <div>
                        <x-input-label for="availability" :value="__('Days of work')" />
                        <x-text-input id="availability" name="availability" type="text" class="mt-1 block w-full" :value="old('availability', $professionalInfo->availability)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('availability')" />
                    </div>


                <div class="flex items-center gap-4 mt-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'professional-info-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </form>
</section>
