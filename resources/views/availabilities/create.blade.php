@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Viewing</h1>
            <form action="/availabilities" method="POST" x-data="handler()">
                @csrf
                <input type="text" name="room" value="{{$room}}" hidden>
                <input type="text" name="roomType" value="{{$roomType}}" hidden>
                <input type="text" x-model="times" name="times" hidden>
                <div class="form-group">
                    <div class="form-check">
                        <input x-model="open" class="form-check-input" type="checkbox" name="open_home" id="OpenHome">
                        <label class="form-check-label" for="OpenHome">
                            Open Home
                        </label>
                    </div>
                </div>
                <template x-if="open">
                    <div class="form-group">
                        <label for="name">Total Groups</label>
                        <input type="number" class="form-control" name="total_people">
                    </div>
                </template>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div id="datepicker"></div>
                            <input type="hidden" id="date" name="date">
                        </div>
                    </div>

                    <div class="col-md-8 overflow-auto" style="max-height: 300px;">
                        <div class="row">
                            <template x-for="(i, index) in times" :key="index">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title" x-text="i"></h5>
                                            <button @click="removeTime(index)" type="button"
                                                class="btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="time" class="form-control" x-model="time">
                        <div class="input-group-append">
                            <button @click="addTime" class="btn btn-outline-secondary" type="button">Add</button>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('css')
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css"
    rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" defer>
</script>

<script>
    function handler() {
            return {
                    open: false,
                    times:[],
                    time : '',
                    addTime() {
                        if (this.time) {
                            this.times.push(this.time);
                        }
                        this.time = '';
                    },
                    removeTime(index) {
                        this.times.splice(index, 1);
                    }
                }
            }
    window.onload = function () {
        $('#datepicker').datepicker({
            format: 'yyyy/mm/dd',
            todayHighlight: true,
            multidate: true,
            multidateSeparator: ',',
            clearBtn: true,
        });

        $('#datepicker').on('changeDate', function() {
            $('#date').val($('#datepicker').datepicker('getFormattedDate'));
        });
    }
</script>
@endpush
