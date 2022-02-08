<?php
function createGamePrintSportOption($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $nameOfSport = $row["type_name"];
        $sportId = $row["id"];
        $resultString .= "<option value='$sportId'>$nameOfSport</option>";
    }
    return $resultString;
}
function createGamePrintGameTypeOption($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $nameOfType = $row["type_name"];
        $sportGameTypeId = $row["id"];
        error_log($nameOfType);
        $resultString .= "<option value='$sportGameTypeId'>$nameOfType</option>";
    }
    return $resultString;
}
function gameSearchPrintGame($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $title = $row["title"];
        $Id = $row["id"];
        $gameTime = $row["game_time"];
        $location = $row["location"];
        $link = "gameinfo.php?id=".$Id;
        $resultString .= "<a href='$link'><div class='gameInfoDisplay'>
                    <h5 class='gameInfoDisplayTitle'>$title</h5>
                    <svg class='gameInfoDisplayElement' xmlns='http://www.w3.org/2000/svg' width='21' height='21' viewBox='0 0 21 21'>
                        <g id='Group_17' data-name='Group 17' transform='translate(0 -2)'>
                            <g id='time' transform='translate(0 5)'>
                                <path id='Path_1' data-name='Path 1' d='M9,7h1.629v4.072H14.7V12.7H9Z' transform='translate(-3.454 -3.039)' fill='#fff'/>
                                <path id='Path_2' data-name='Path 2' d='M18,10a8,8,0,1,1-8-8A8,8,0,0,1,18,10Zm-1.6,0A6.4,6.4,0,1,1,10,3.6,6.4,6.4,0,0,1,16.4,10Z' transform='translate(-2 -2)' fill='#fff' fill-rule='evenodd'/>
                            </g>
                        </g>
                    </svg>
                    <h5 class='gameInfoDisplayElement'>$gameTime</h5>
                    <svg class='gameInfoDisplayElement' xmlns='http://www.w3.org/2000/svg' width='13.257' height='16' viewBox='0 0 13.257 16'>
                        <path id='Path_85' data-name='Path 85' d='M14.171,9.222a2.95,2.95,0,1,1-2.95-2.95A2.949,2.949,0,0,1,14.171,9.222Zm-1.475,0a1.475,1.475,0,1,1-1.475-1.475A1.475,1.475,0,0,1,12.7,9.222Z' transform='translate(-4.393 -2.392)' fill='#fff' fill-rule='evenodd'/>
                        <path id='Path_86' data-name='Path 86' d='M5.058,12.429a6.629,6.629,0,1,1,9.371-.23L9.859,17Zm8.3-1.246L9.808,14.917,6.074,11.363a5.156,5.156,0,1,1,7.289-.179Z' transform='translate(-3 -1)' fill='#fff' fill-rule='evenodd'/>
                    </svg>
                    <h5 class='gameInfoDisplayElement'>$location</h5>
                </div></a>";
    }
    error_log("FINISHED");
    return $resultString;
}
function gameInfoExtract($data) {
    $data->data_seek(0);
    $row = $data->fetch_array();
    $title = $row["title"];
    $game_type_id = $row["game_type_id"];
    $_SESSION["gameInfoGameTypeId"] = $game_type_id;
    $location = $row["location"];
    $description = $row["intro"];
    $creator = $row["creator"];
    $result = $title . "ç" . $game_type_id . "ç" . $location . "ç" . $description . "ç" . $creator;
    return $result;
}