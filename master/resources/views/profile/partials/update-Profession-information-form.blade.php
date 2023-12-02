<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profession Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your professional information.") }}
        </p>
    </header>


    <form method="post" action="{{ route('ProfessionalUpdate') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="row">
            <div class="col-4">
                <div>
                    @if ($professionalInfo->name)
                        <img src="{{ url('img/' . $professionalInfo->image) }}" alt="{{ $professionalInfo->name }}'s Profile Picture" class="img-fluid" style="max-width: 200px; height: auto;">
                    @else
                        <img src="{{ url('images/users/Default_pfp.svg.png') }}" alt="Default Profile Picture" class="img-fluid" style="max-width: 200px; height: auto;">
                    @endif

                    <div class="form-group mt-3">
                        <label for="image">{{ __('Upload new image') }}</label>
                        <input id="image" name="image" type="file" accept="image/*" class="form-control-file" :value="old('image', $professionalInfo->image)" autocomplete="image" />
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $professionalInfo->name)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
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


                <!-- Add other professional fields as needed -->

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
