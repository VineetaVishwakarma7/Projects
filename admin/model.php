<?php


class model
{
	
	public $conn="";
	function __construct()
	{
		
				//servername //username // pass // db name
		$this->conn=new mysqli('localhost','root','','online_shop');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl"; 
		$run=$this->conn->query($sel);  
		while($fetch=$run->fetch_object()) 
		{
			$arr[]=$fetch;
		}
		return $arr;
	}

	function insert($tbl,$arr)
	{
		//$arr=array("name"=>$name,"email"=>$email, "comment"=>$comment,"created_at"=>$created_at,"updated_at"=>$updated_at);

		$col_arr=array_keys($arr);
		$column=implode(",",$col_arr);

		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);

		$ins="insert into $tbl ($column) value ('$value')";
		$run=$this->conn->query($ins);
		return $run; 

	}

	function delete($tbl, $where)
	{
		$col_arr=array_keys($where);
		$value_arr=array_values($where);

		echo $del="delete from $tbl where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
	}
	
}
$obj=new model;

?>