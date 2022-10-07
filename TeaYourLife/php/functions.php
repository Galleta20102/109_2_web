<?php
//啟動 session資料庫的連線用
@session_start();
//取得所有店家資料
function get_publish_store($sec)
{
  //宣告空的陣列
    $datas = array();
    //將查詢語法當成字串，記錄在$sql變數中
    $sql = "SELECT * FROM `store` WHERE `output` = 1 AND `section` = {$sec};";
    //用 mysqli_query 執行請求 請求結果存在 $query 
    $query = mysqli_query($_SESSION['link'], $sql);
  
  if ($query)
  {
    //用 mysqli_num_rows 判別是否還有資料
    if (mysqli_num_rows($query) > 0)
    {
      //用 mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query))
      {
        $datas[] = $row;
      }
    }
    //釋放查詢到的記憶體
    mysqli_free_result($query);
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $datas;
}

//取單店家
function get_store($id)
{
  //宣告回傳結果
  $result = null;
  $sql = "SELECT * FROM `store` WHERE `output` = 1 AND `id` = {$id};";
  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if (mysqli_num_rows($query) == 1)
    {
      $result = mysqli_fetch_assoc($query);
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

//檢查資料庫有無該使用者名稱
function check_has_username($username)
{
  $result = null;
  $sql = "SELECT * FROM `admin` WHERE `username` = '{$username}';";
  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if (mysqli_num_rows($query) >= 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $result;
}

//新增使用者
function insert_user($username, $password, $name)
{
  $result = null;
  $sql = "INSERT INTO `admin` (`username`, `password`, `name`) VALUE ('{$username}', '{$password}', '{$name}');";
  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    //判斷資料更動
    if (mysqli_affected_rows($_SESSION['link']) == 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $result;
}

//確認帳號密碼
function verify_user($username, $password)
{
  $result = null;
  $sql = "SELECT * FROM `admin` WHERE `username` = '{$username}' AND `password` = '{$password}';";
  $query = mysqli_query($_SESSION['link'], $sql);
  if ($query)
  {
    if (mysqli_num_rows($query) == 1)
    {
      //取得使用者資料
      $user = mysqli_fetch_assoc($query);
      
      //設定 is_login 代表登入
      $_SESSION['is_login'] = TRUE;
      //紀錄登入者的id
      $_SESSION['login_user_id'] = $user['id'];
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $result;
}

//確認用戶收藏
function verify_profile($id)
{
  $result = null;
  $sql = "SELECT * FROM `profile` WHERE `sectionid` = '{$id}';";
  $query = mysqli_query($_SESSION['link'], $sql);
  if ($query)
  {
    if (mysqli_num_rows($query) == 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $result;
}

//取得收藏店家
function get_favorite_datas()
{
    //宣告空的陣列
    $datas = array();
    //將查詢語法當成字串，記錄在$sql變數中
    $sql = "SELECT * FROM `favorite` WHERE `user` = {$_SESSION['login_user_id']}";
    //用 mysqli_query 執行請求 請求結果存在 $query 
    $query = mysqli_query($_SESSION['link'], $sql);
  
  if ($query)
  {
    //用 mysqli_num_rows 判別是否還有資料
    if (mysqli_num_rows($query) > 0)
    {
      //用 mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query))
      {
        $datas[] = $row;
      }
    }
    //釋放查詢到的記憶體
    mysqli_free_result($query);
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $datas;
}

//取得用戶資料
function get_user_datas()
{
    //宣告空的陣列
    $datas = null;
    //將查詢語法當成字串，記錄在$sql變數中
    $sql = "SELECT * FROM `admin` WHERE `id` = {$_SESSION['login_user_id']}";
    //用 mysqli_query 執行請求 請求結果存在 $query 
    $query = mysqli_query($_SESSION['link'], $sql);
  
  if ($query)
  {
    //用 mysqli_num_rows 判別是否還有資料
    if (mysqli_num_rows($query) == 1)
    {
      $datas = mysqli_fetch_assoc($query);
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $datas;
}


//刪除收藏清單
function del_favorite($id)
{
  $result = null;
	$sql = "DELETE FROM `favorite` WHERE `id` = {$id};";
  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if(mysqli_affected_rows($_SESSION['link']) == 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $result;
}

?>