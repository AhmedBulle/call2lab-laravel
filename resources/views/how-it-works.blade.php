@extends('layouts.app')

@section('title', 'How It Works - Call2Lab')

@section('content')
<div class="max-w-5xl mx-auto py-16 px-6">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">How It Works</h1>
    
    <ol class="space-y-8 text-lg text-gray-700 dark:text-gray-300">
        <li>
            <h2 class="text-xl font-semibold">1. Book a Test</h2>
            <p>Choose your preferred test online and schedule it at your convenience.</p>
        </li>
        <li>
            <h2 class="text-xl font-semibold">2. Sample Collection</h2>
            <p>Visit our lab or request a sample collection at your home or office.</p>
        </li>
        <li>
            <h2 class="text-xl font-semibold">3. Get Results</h2>
            <p>Receive your test results securely through your dashboard within 24–48 hours.</p>
        </li>
    </ol>
</div>
@endsection
