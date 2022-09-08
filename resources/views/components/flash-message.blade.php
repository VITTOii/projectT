@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="fixed top-0 right-1/3 transform-translate-x-1/2 bg-laravel text-laravel2 px-48 py-3">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif
