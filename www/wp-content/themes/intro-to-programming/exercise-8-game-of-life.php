<div id="game-of-life"></div>

<style>
.white {
background-color: white;
}
.black {
background-color: black;
}
</style>

<script>
var state = [
/*[
 0, 0, 0, 0, 0, 0, 0, 0
],
[
 0, 1, 0, 1, 1, 0, 1, 0
],
[
  0, 1, 0, 1, 0, 1, 1, 0
],
[
  0, 1, 0, 1, 0, 1, 1, 0
 ],
 [
  0, 0, 0, 0, 0, 0, 0, 0
]*/
];
$rows = 27;
$columns = 27;


for($row=0;$row<=$rows;$row++){
state [ $row ] = [];
  for($column=0;$column<=$columns;$column++){
    if ($row == 0 || $row == $rows || $column == 0 || $column == $columns) {
      state [ $row ] [ $column ] = 0;
    }
    else {
    state [ $row ] [ $column ] = Math.round(Math.random());
    }
  }
}

function print_state (){


var new_state = [];
for($row=0;$row<=$rows;$row++){
new_state [ $row ] = [];
  for($column=0;$column<=$columns;$column++){
    if ($row == 0 || $row == $rows || $column == 0 || $column == $columns) {
      new_state [ $row ] [ $column ] = 0;
    }
    else {
    new_state [ $row ] [ $column ] = cell_will_live ( $row, $column );
    }
  }
}

var string = "<table>";

for($row=0;$row<=$rows;$row++){

 string += "<tr>";
     for($column=0;$column<=$columns;$column++){
            string += "<td class='";
            if (state [ $row ] [ $column ]) {
              string += 'black';
            }
            string += "' align='center'></td>";
     }
 string += "</tr>";
}

string += "</table>";

state = new_state;


jQuery('#game-of-life').html( string );


}

setInterval(print_state,250);

//console.log ( state );
//console.log ( new_state );

var row = 2;
var column = 3;

var number_of_neighbors = count_alive_neighbors( row, column );

// alert( number_of_neighbors );
// alert( cell_will_live ( row, column ) );

function count_alive_neighbors( row, column ) {
var neighbors = 0;

//if ( row > 0 ) {
  neighbors += state[ row - 1 ][ column ];
  neighbors += state[ row - 1 ][ column + 1 ];
  neighbors += state[ row ][ column + 1 ];
  neighbors += state[ row + 1 ][ column + 1 ];
  neighbors += state[ row + 1 ][ column ];
  neighbors += state[ row + 1 ][ column - 1 ];
  neighbors += state[ row ][ column - 1 ];
  neighbors += state[ row - 1][ column - 1 ];
//}


return neighbors;
}

function cell_will_live (row, column) {
var neighbor_count = count_alive_neighbors (row, column);
var is_alive = state[ row ][ column ];
var will_live = false;
if (is_alive && (neighbor_count ==2 || neighbor_count ==3)) {
 will_live = true;
} else if (!is_alive &&(neighbor_count ==3)) {
 will_live = true;
}

return will_live;
}

</script>
