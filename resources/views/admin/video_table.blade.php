
<table  id="video_table" class="table table-striped table-bordered table-hover">
    <thead>
    <tr class="panel-heading" style="background-color: lightblue;font-size: medium">
        <th><i aria-hidden="true"></i> Name</th>
        <th><i aria-hidden="true"></i> Link  </th>
        <th> </th>

    </tr>
    </thead>
    <tbody>
    @foreach ($videos as $video)
        <tr id="edittest">
            <td id="edittest1"><?php echo($video->video_lookup_value_tag); ?> </td>
            <td id="edittest2"><?php echo($video->video_lookup_value_link); ?></td>
            <td style="text-align: right">
                <a href="{{ route('delete_video', ['id' => $video->video_lookup_value_id]) }}" class="btn btn-danger enable" id="delete">
                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $videos->links() }}