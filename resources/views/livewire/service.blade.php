<style>
    @media screen and (max-width: 1000px) { 
        #calendar .fc-header-toolbar 
        {
            display: flex;
            flex-direction: column;
        }
        #calendar .fc-header-toolbar .fc-toolbar-chunk .fc-toolbar-title
        {
            font-size: 160%;
        }
    }

    #calendar .fc-header-toolbar .fc-toolbar-chunk button
    {
        background-color: #f59e0b;
        border: none;
        border-radius: 0.5rem;
    }

    #calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group .fc-listWeek-button
    {
        margin-left: 5px;
    }

    #calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group .fc-next-button
    {
        margin-left: 5px;
    }

    #calendar .fc-header-toolbar .fc-toolbar-chunk button:hover
    {
        background-color: #ffc35e;
        border: none;
    }
</style>
<script src="{{ asset('vendor/fullcalendar/dist/index.global.min.js') }}"></script>
<script src="{{ asset('js/servicepage/service.js') }}"></script>

<div id='calendar'></div>