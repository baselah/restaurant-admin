<x-admin-master>

    @section('content')



    @if (auth()->user()->role=="admin")
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>


    @endif




    @endsection
    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
     <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection



</x-admin-master>
