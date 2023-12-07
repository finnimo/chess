<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="board"></div>
</body>
</html>

<script>


let board = [
            ['','','','','','','',''],
            ['','','','','','','',''],
            ['','','','','','','',''],
            ['','','','','','','',''],
            ['','','','','','','',''],         
            ['','','','','','','',''],
            ['','','','','','','',''],
            ['','','','','','','','']
        ];


class Pawn{

    constructor(colour,row,column){
        this.colour = colour;
        this.row = row;
        this.column = column;
        board[row][column] = this;
    }

    place(newRow,newColumn){
        board[newRow][newColumn] = this;
        board[this.row][this.column] = '';
        newRow = this.row;
        newColumn = this.column
    }
}

const pwn1 = new Pawn('w',1,0);
const pwn2 = new Pawn('w',1,1);
const pwn3 = new Pawn('w',1,2);
const pwn4 = new Pawn('w',1,3);
const pwn5 = new Pawn('w',1,4);
const pwn6 = new Pawn('w',1,5);
const pwn7 = new Pawn('w',1,6);
const pwn8 = new Pawn('w',1,7);


console.log(board);
</script>


