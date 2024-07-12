<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livewire Example</title>
        @livewireStyles
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 50px auto;
                padding: 20px;
                background: white;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            h1 {
                color: #4f46e5; /* Indigo color */
                font-size: 1.75rem;
                margin-bottom: 20px;
                text-align: center;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: 600;
                color: #4a5568; /* Gray color */
            }
            select {
                width: 100%;
                padding: 10px;
                border: 1px solid #cbd5e0; /* Light gray color */
                border-radius: 8px;
                font-size: 1rem;
                background-color: white;
                color: #2d3748; /* Dark gray color */
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            }
            .result {
                margin-top: 30px;
                padding: 15px;
                background: #edf2f7; /* Light gray background */
                border-radius: 8px;
                color: #2d3748; /* Dark gray color */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Livewire Example</h1>

            <div class="mb-4">
                <label for="country">Country</label>
                <select wire:model.live="selectedCountry" id="country">
                    <option value="">Choose country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="state">State</label>
                <select wire:model.live="selectedState" id="state">
                    <option value="">Choose state</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="city">City</label>
                <select wire:model.live="selectedCity" id="city">
                    <option value="">Choose city</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="result">
                <p><strong>Selected Country:</strong> {{ $selectedCountry ? $countries->firstWhere('id', $selectedCountry)->name : 'None' }}</p>
                <p><strong>Selected State:</strong> {{ $selectedState ? $states->firstWhere('id', $selectedState)->name : 'None' }}</p>
                <p><strong>Selected City:</strong> {{ $selectedCity ? $cities->firstWhere('id', $selectedCity)->name : 'None' }}</p>
            </div>
        </div>
        @livewireScripts
    </body>
    </html>
</div>
