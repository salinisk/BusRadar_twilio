<?php
function retrieve_next_bus()
{

        $request = $_REQUEST['Body'];
        $pieces = explode(" ", $request);
        $bus_no = $pieces[0];
        $stop_id = $pieces[1];
        $after = $pieces[2];
        $db = new SQLite3('BusRadar');
        $query = 'SELECT time FROM bus_timings where bus_number = '. $bus_no. ' and stop_id = ' . $stop_id . ' and time >=' . $after;
        $results = $db->query($query);
        while ($row = $results->fetchArray()) {
                 return ("Your next bus is at " . $row['time']);
        }
        return "Sorry, bus not available at that stop after your specified time";
}
    // now greet the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Hi, <?php echo "" . retrieve_next_bus() ?>!</Message>
</Response>
