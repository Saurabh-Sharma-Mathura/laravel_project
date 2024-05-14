@if(Auth::user())
<x-table.table-panel tableName="Tasks" :paginatorAttr="$tasks">
    <div class="container flex items-center">
       <!--  <form method="GET" action="/task">
            <x-form.input inputName="search" type="date" value="{{ request('search') }}"/>
            <x-form.button  buttonName="search" class=""/>
        </form> -->

        <form method="GET" action="/task" class="mr-5">
            <x-form.input inputName="searchbody" value="{{ request('search') }}"/>
            <x-form.button  buttonName="search"/>
        </form>
    </div>
    <thead>
        <tr>
            <x-table.table-head thName="Date Created" />
            <x-table.table-head thName="Task Name" />
            <x-table.table-head thName="Created By" />
            <x-table.table-head thName="Assigned to" />
            <x-table.table-head thName="Due" />
            <x-table.table-head thName="Completed" />
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class="hover:bg-grey-lighter">
                <x-table.table-data tdName="{{ date_format($task->created_at, 'd/m/Y') }}" />
                <td class="py-4 px-6 border-b border-grey-light">
                    <a href="/task/{{$task->id}}" class="underline"> {{ ucwords($task->title) }}</a>
                </td>
                <x-table.table-data tdName="{{ $task->getTaskCreatorUser()}}" />
                <x-table.table-data tdName="{{ $task->getAssignedUser() }}" />                
                <x-table.table-data tdName="{{date('d/m/Y', strtotime($task->due))}}" />
                @if($task->completed)
                 <x-table.table-data tdName="Yes" />
                @else
                <x-table.table-data tdName="No" />
                @endif
            </tr>
        @endforeach
    </tbody>
</x-table.table-panel>
 @else

<x-sub-section-panel sectionName="Login">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('sessions.login') }}">
                @csrf
                <x-form.input inputName="email" type="email"/>
                <x-form.input inputName="password" type="password"/>
                <x-form.button buttonName="Login" />
            </form>
        </div>
    </div>
</x-sub-section-panel>
 @endif