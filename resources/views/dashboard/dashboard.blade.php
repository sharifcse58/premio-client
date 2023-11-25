@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="row">
            <div class="container">
                <div class="mt-4">
                    <input type="text" v-model="formData.domain" id="">
                    <div v-for="(rule, index) in formData.rules" :key="index" class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <select v-model="rule.show" class="form-control mr-2">
                                <option value="show">Show</option>
                                <option value="hide">Don't Show</option>
                            </select>
                            <select v-model="rule.type" class="form-control mr-2">
                                <option value="contains">Contains</option>
                                <option value="starts_with">Starts With</option>
                                <option value="ends_with">Ends With</option>
                                <option value="exact">Exact</option>
                            </select>
                            <p v-text='formData.domain'></p>
                            <input v-model="rule.value" type="text" class="form-control mr-2">
                            <button @click="removeRule(index)" class="btn btn-danger">Remove</button>
                        </div>
                    </div>
                    <button @click="addRule" class="btn btn-primary">Add Rule</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/targeting-rules.js')
@endpush
