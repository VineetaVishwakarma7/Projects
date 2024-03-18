<?php

include_once('model.php');

class control extends model
{
    function __construct()
    {
        model::__construct();

        date_default_timezone_set("asia/calcutta");

        $url=$_SERVER['PATH_INFO'];
        switch($url)
        {
            case'/index':
            include_once('index.php');
            break;

            case'/dashboard':
            include_once('dashboard.php');
            break;

            case'/login':
            include_once('login.php');
            break;


            case'/add_products':
            $arr_categories=$this->select('categories');
            if(isset($_REQUEST['submit']))
                {
                    $cate_id=$_REQUEST['cate_id'];
                    $prod_name=$_REQUEST['prod_name'];
                    $sort_desc=$_REQUEST['sort_desc'];

                    $img=$_FILES['img']['name'];
					$path='assets/img/products/'.$img;
					$copy_file=$_FILES['img']['tmp_name'];
					move_uploaded_file($copy_file,$path);

                    $main_price=$_REQUEST['main_price'];
                    $desc_price=$_REQUEST['disc_price'];
            
                    $created_at=date("Y-m-d H:i:s");
                    $updated_at=date("Y-m-d H:i:s");

                    $arr=array("cate_id"=>$cate_id,"prod_name"=>$prod_name, "sort_desc"=>$sort_desc,"img"=>$img,"main_price"=>$main_price,"disc_price"=>$desc_price,"created_at"=>$created_at,"updated_at"=>$updated_at);
                    $res=$this->insert('product',$arr);
                    // echo $arr;
                    if($res)
                    {
                        echo "<script>
                                alert('submit success !');
                                window.location='add_products';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                                alert(' Failed !');
                                window.location='add_products';
                            </script>"; 
                    }
                }
            include_once('add_products.php');
            break;

            case'/manage_products':
            $product_arr=$this->select('product');
            include_once('manage_products.php');
            break;


            case'/manage_contact':
            $inquiry_arr=$this->select('inquiry');
            include_once('manage_contact.php');
            break;

            case'/add_categories':
            if(isset($_REQUEST['submit']))
                {
                    $cate_name=$_REQUEST['cate_name'];

                    $cate_img=$_FILES['cate_img']['name'];
					$path='assets/img/category/'.$cate_img;
					$copy_file=$_FILES['cate_img']['tmp_name'];
					move_uploaded_file($copy_file,$path);
            
                    $created_at=date("Y-m-d H:i:s");
                    $updated_at=date("Y-m-d H:i:s");

                    $arr=array("cate_name"=>$cate_name, "cate_img"=>$cate_img,"created_at"=>$created_at,"updated_at"=>$updated_at);
                    $res=$this->insert('categories',$arr);
                    if($res)
                    {
                        echo "<script>
                                alert('submit success !');
                                window.location='add_categories';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                                alert(' Failed !');
                                window.location='add_categories';
                            </script>"; 
                    }
                }
            include_once('add_categories.php');
            break;

            case'/manage_categories':
            $categories_arr=$this->select('categories');
            include_once('manage_categories.php');
            break;

            case'/add_employees':
            $arr_country=$this->select('country');

            if(isset($_REQUEST['submit']))
                {
                    $emp_name=$_REQUEST['emp_name'];
                    $emp_email=$_REQUEST['emp_email'];
                    $emp_no=$_REQUEST['emp_no'];
                    $emp_address=$_REQUEST['emp_address'];

                    $c_id=$_REQUEST['c_id'];

                    $img=$_FILES['img']['name'];
					$path='assets/img/employee/'.$img;
					$copy_file=$_FILES['img']['tmp_name'];
					move_uploaded_file($copy_file,$path);
            
                    $created_at=date("Y-m-d H:i:s");
                    $updated_at=date("Y-m-d H:i:s");

                    $arr=array("emp_name"=>$emp_name,"emp_email"=>$emp_email, "emp_no"=>$emp_no,"emp_address"=>$emp_address,"c_id"=>$c_id,"img"=>$img,"created_at"=>$created_at,"updated_at"=>$updated_at);

                    $res=$this->insert('employee',$arr);

                   // echo $arr;
                    if($res)
                    {
                        echo "<script>
                                alert('Employee Register success !');
                                window.location='add_employees';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                                alert(' Failed !');
                                window.location='add_employees';
                            </script>"; 
                    }
                }
            include_once('add_employees.php');
            break;

            case'/manage_employees':
            $employee_arr=$this->select('employee');
            include_once('manage_employees.php');
            break;

            case'/manage_feedback':
            $feedback_arr=$this->select('feedback');
            include_once('manage_feedback.php');
            break;

            case'/manage_order':
            $ord_arr=$this->select('orders');
            include_once('manage_order.php');
            break;

            case'/manage_customer':
            $customer_arr=$this->select('customer');
            include_once('manage_customer.php');
            break;

            case'/manage_cart':
            $cart_arr=$this->select('cart');
            include_once('manage_cart.php');
            break;

            case'/add_blog':
            if(isset($_REQUEST['submit']))
            {
                $img=$_FILES['img']['name'];
                $path='assets/img/blog/'.$img;
                $copy_file=$_FILES['img']['tmp_name'];
                move_uploaded_file($copy_file,$path);

                $name=$_REQUEST['name'];
                $comment=$_REQUEST['comment'];
                $description=$_REQUEST['description'];
               
        
                $created_at=date("Y-m-d H:i:s");
                $updated_at=date("Y-m-d H:i:s");

                $arr=array("img"=>$img,"name"=>$name, "comment"=>$comment,"description"=>$description,"created_at"=>$created_at,"updated_at"=>$updated_at);

                $res=$this->insert('blogs',$arr);

               // echo $arr;
                if($res)
                {
                    echo "<script>
                            alert('Add Blog success !');
                            window.location='add_blog';
                        </script>";
                }
                else
                {
                    echo "<script>
                            alert(' Failed !');
                            window.location='add_blog';
                        </script>"; 
                }
            }
            include_once('add_blog.php');
            break;

            case'/manage_blog':
            $blogs_arr=$this->select('blogs');
            include_once('manage_blog.php');
            break;

            case'/delete':
                if(isset($_REQUEST['cust_del']))
                {
                    $cust_id=$_REQUEST['cust_del'];
                    $where=array("cust_id"=>$cust_id);
                  
                    $res=$this->delete('customer',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_customer';
                            </script>";
                    }
                }

                if(isset($_REQUEST['prod_del']))
                {
                    $prod_id=$_REQUEST['prod_del'];
                    $where=array("prod_id"=>$prod_id);
                  
                    $res=$this->delete('product',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_products';
                            </script>";
                    }
                }

                if(isset($_REQUEST['blog_del']))
                {
                    $id=$_REQUEST['blog_del'];
                    $where=array("id"=>$id);
                  
                    $res=$this->delete('blogs',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_blog';
                            </script>";
                    }
                }

                if(isset($_REQUEST['cate_del']))
                {
                    $cate_id=$_REQUEST['cate_del'];
                    $where=array("cate_id"=>$cate_id);
                  
                    $res=$this->delete('categories',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_categories';
                            </script>";
                    }
                }

                if(isset($_REQUEST['inq_del']))
                {
                    $inq_id=$_REQUEST['inq_del'];
                    $where=array("inq_id"=>$inq_id);
                  
                    $res=$this->delete('inquiry',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_contact';
                            </script>";
                    }
                }

                if(isset($_REQUEST['emp_del']))
                {
                    $emp_id=$_REQUEST['emp_del'];
                    $where=array("emp_id"=>$emp_id);
                  
                    $res=$this->delete('employee',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_employees';
                            </script>";
                    }
                }

                if(isset($_REQUEST['feed_del']))
                {
                    $feed_id=$_REQUEST['feed_del'];
                    $where=array("feed_id"=>$feed_id);
                  
                    $res=$this->delete('employee',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_feedback';
                            </script>";
                    }
                }

                if(isset($_REQUEST['order_del']))
                {
                    $id=$_REQUEST['order_del'];
                    $where=array("id"=>$id);
                  
                    $res=$this->delete('orders',$where);
                    if($res)
                    {
                        echo "<script>
                                alert('Delete Success');
                                window.location='manage_order';
                            </script>";
                    }
                }
            break;

            
            if(isset($_REQUEST['cart_del']))
            {
                $cart_id=$_REQUEST['cart_del'];
                $where=array("cart_id"=>$cart_id);
              
                $res=$this->delete('cart',$where);
                if($res)
                {
                    echo "<script>
                            alert('Delete Success');
                            window.location='manage_cart';
                        </script>";
                }
            }


            default:
            include_once('404.php');
            break;
        }
    }
}
$obj=new control;
?>