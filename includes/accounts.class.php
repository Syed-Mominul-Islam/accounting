<?php
/*
 * Developed by WEBSNIT
 * email: info@websnit.com
 */
class account
{
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function pagination($pageno, $pagelink, $range, $total_pages ) {

        if($pageno == 1) {
            $first_li_class = 'active';
        } else {
            $first_li_class = '';
        }

        if ($pageno <= 1) {
            $second_li_class = 'disabled';
            $second_link = '#';
        } else {
            $second_li_class = '';
            $second_link = $pagelink.'?pageno='.($pageno - 1);
        }

        if($pageno >= $total_pages) { 
            $next_li_class =  'disabled';
            $next_link =  '#';
        } else {
            $next_li_class =  '';
            $next_link =  $pagelink.'?pageno='.($pageno + 1);
        }


        $pagination_string = '<ul class="pagination pagination-md m-0 float-left">
            <li class="page-item"><a class="'.$first_li_class.' page-link" href="'.$pagelink.'?pageno=1">First</a></li>
            <li class="'.$second_li_class.' page-item">
                <a class="page-link" href="'.$second_link.'">Prev</a>
            </li>';

            for ($x = ($pageno - $range); $x < (($pageno + $range) + 1); $x++) {
               // if it's a valid page number...
               if (($x > 0) && ($x <= $total_pages)) {
                  // if we're on current page...
                  if ($x == $pageno) {
                     // 'highlight' it but don't make a link
                     $pagination_string .= "<li class='page-item'><a class='active page-link'><b>$x</b></a></li>";
                  // if not current page...
                  } else {
                     // make it a link
                     $pagination_string .= "<li class='page-item'><a class='page-link' href='".$pagelink."?pageno=$x'>$x</a></li>";
                  } // end else
               } // end if
            } // end for

            $pagination_string .= '<li class="'.$next_li_class.' page-item">
                <a class="page-link" href="'.$next_link .'">Next</a>
            </li>
            <li class="page-item"><a class="page-link" href="'.$pagelink.'?pageno='.$total_pages.'">Last</a></li>
      </ul>';

      return $pagination_string;

    }

    public function partylist($list_name='',$pid='',$req='',$list_id='')
    {
      if(!$list_name){ $list_name = 'company_id'; }
      if($req == 'required'){$req = 'required';}
      $query = 'SELECT * FROM snit_party WHERE published = 1 AND deleted = 0 ORDER BY com_name';
      $res = $this->conn->query($query);
      $party_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$req.' class="searchable" style="width:350px">';
      $party_list = $party_list.'<option value="">Select Company</option>';
      while($party =  mysqli_fetch_array($res) )
      {
        if($party['id'] == $pid){
          $sl= 'selected="selected"';
        }else{
          $sl = '';
        }
        $party_list = $party_list.'<option value="'.$party['id'].'" '.$sl.'>'.$party['com_name'].'</option>';
      }
      $party_list = $party_list.'</select>';
      return $party_list;
    }

    public function ap_ar_partylist($party_id='',$type,$edit_id=null)
    {
        $comquery = "SELECT id, com_name FROM snit_party WHERE published = 1 AND deleted = 0 ORDER BY id";
        $com = $this->conn->query($comquery);
        $i = 0;	$j=0;
        $ap_party_list= '<select name="'.$party_id.'" class="searchable" style="width:200px; height:30px important!" onChange="showUser(this.value)"><option value="">Select Company</option>';
        $ar_party_list = '<select name="'.$party_id.'" class="searchable" style="width:200px; height:30px important!" onChange="showUser(this.value)"><option value="">Select Company</option>';
        while($company = mysqli_fetch_array($com))
        {
            $company_id = $company['id'];
            $query = "SELECT p.company_id,p.bank_id,p.product_id,p.bill_type,p.types,p.amount,p.save_date,p.bill_no,p.id FROM snit_party_transaction AS p WHERE p.company_id = $company_id ORDER BY p.company_id";
            $res = $this->conn->query($query);
            $num = mysqli_num_rows($res);
            if($num > 0)
            {
                $balance = 0;
                while($report =  mysqli_fetch_array($res) )
		        {
                  $damount = 0;
                  $camount = 0;
                  if($report['bill_type'] == 1)
                  {
                    $damount = $report['amount'];
                    $balance = $balance + $damount;
                  }
		              if($report['bill_type'] == 2)
                  {
                    $camount = $report['amount'];
                    $balance = $balance - $camount;
                  }
                } // end inner while


                if($balance < 0)
                {
                    if($edit_id == $company_id){$sl= 'selected="selected"';} else{$sl = '';}
                     $ap_party_list = $ap_party_list.'<option value="'.$company['id'].'" '.$sl.'>'.$company['com_name'].'</option>';
                     $i++;
                }
                if($balance > 0)
                {
                    if($edit_id == $company_id){$sl= 'selected="selected"';} else{$sl = '';}
                     $ar_party_list = $ar_party_list.'<option value="'.$company['id'].'" '.$sl.'>'.$company['com_name'].'</option>';
                     $j++;
                }

            }// end if num

        }	// end outer while

        if($type == 1)
        {
            return  $ap_party_list.'</select>';
        }
        if($type == 2)
        {
            return $ar_party_list.'</select>';
        }

    }

    public function getPartyName($party_id)
    {
        $party_name_query = "SELECT *FROM snit_party where id =".$party_id;
        $res = $this->conn->query($party_name_query);
        $row = mysqli_fetch_array($res);
        return $row['com_name'];
    }

    public function productlist($selected_id=0,$select_name='',$req='',$select_id='',$selected_text=''){
        if(!$select_name){ $select_name = 'product_id'; }
        if(!$select_id){ $select_id = 'product_id'; }
        if($req == 'required'){$req = 'required';}
        $product_query = 'SELECT *FROM snit_products WHERE published = 1 AND deleted = 0 ORDER BY product_number';
        $pro_res = $this->conn->query($product_query);
        $products = '<select id="'.$select_id.'" name="'.$select_name.'" '.$req.' style="width:350px" class="products">';
        if($selected_id != 0){
          $products .= '<option value='.$selected_id.' selected="selected">'.$selected_text.'</option>';
        }
        $products = $products.'</select>';
        return $products;
    }


    public function product_unit_list($list_name='',$pid='',$req='',$list_id='')
    {
        if(!$list_name){ $list_name = 'product_unit_id'; }
	    if($req == 'required'){$req = 'required';}
        $query = 'SELECT * FROM snit_product_units WHERE status = 1 AND deleted = 0 ORDER BY unit_name';
	    $res = $this->conn->query($query);
	    $party_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$req.' style="width:90px">';
        $party_list = $party_list.'<option value="">Select Unit</option>';
	    while($party =  mysqli_fetch_array($res) )
	    {
	        if($party['id'] == $pid){
	            $sl= 'selected="selected"';
	        }else{
	              $sl = '';
	        }
	        $party_list = $party_list.'<option value="'.$party['id'].'" '.$sl.'>'.$party['unit_name'].'</option>';
	    }
	    $party_list = $party_list.'</select>';
	    return $party_list;
     }

    public function product_select_list(){

        $product_query = 'SELECT *FROM snit_products WHERE published = 1 AND deleted = 0 ORDER BY id';
        $pro_res = $this->conn->query($product_query);
        $products = '<select name="product_id[]" class="fresh_list" style="width:350px" onChange="show_product_details(this);"><option value="">Select a Product</option>';
        while($product =  mysqli_fetch_array($pro_res) )
        {

            $products = $products.'<option value="'.$product['id'].'">'.$product['product_number'].'-'.$product['product_name'].'</option>';
        }
        $products = $products.'</select>';
        return $products;
    }

    public function getGeneralPurposeList($select_id='',$gpid='',$req=''){

            if(!$select_id){$select_id = 'purpose_id';}
			if($req == 'required'){$req = 'required';}

            $query = 'SELECT * FROM snit_general_ledger WHERE published = 1 AND deleted = 0 ORDER BY name';
            $res = $this->conn->query($query);
            $str_purpose = '<select name="'.$select_id.'" '.$req.' class="select2" style="width:350px"><option value="">Select General Ledger Item</option>';
            while($purpose =  mysqli_fetch_array($res) )
            {
                if($gpid == $purpose['id'])
                {
                  $sl= 'selected="selected"';
                }
                else
                {
                  $sl = '';
                }
                $str_purpose = $str_purpose.'<option value="'.$purpose['id'].'" '.$sl.'>'.$purpose['name'].'</option>';
            }
            $str_purpose = $str_purpose .'</select>';

            return $str_purpose;

    }

    public function banklist( $bname = null, $edit_id = null,$required='')
    {
        if($bname == null ){
           $bname = ' name = "bank_id"';
        }else{
          $bname = " name = $bname ";
        }

		if($required !=''){
			$req = 'required';
		}else{
			$req = '';
		}

        $bank_query = 'SELECT * FROM snit_bank_list WHERE published = 1 AND deleted = 0 ORDER BY id';
		$res = $this->conn->query($bank_query);
		$str_bank = '<select '.$bname.' class="select2" style="width:350px" '.$req.'>';
        $str_bank = $str_bank.'<option value="">Select Bank</option>';
        while($bank =  mysqli_fetch_array($res) )
	      {
		   if($edit_id == $bank['id'])
		   {
		     $sl= 'selected="selected"';
		   }
		   else
		   {
		     $sl = '';
		   }

		   $str_bank = $str_bank.'<option value="'.$bank['id'].'" '.$sl.'>'.$bank['bank_name'].' - '.$bank['account_number'].'</option>';
		}
		$str_bank = $str_bank .'</select>';
                return $str_bank;

    }

    public function getBankName($bank_id = null)
    {
      if($bank_id == null){ $cond = '';}
      else { $cond = "AND id = '$bank_id'";}
      $bank_query = "SELECT * FROM snit_bank_list WHERE published = 1 AND deleted = 0 $cond ";
      $res = $this->conn->query($bank_query);
      if($bank_id == null)
        {
           return $res;
        }
      else
        {
           $bank_name =  mysqli_fetch_array($res);
           $bname_number = $bank_name['bank_name'].'-'.$bank_name['account_number'];
           return $bname_number;
        }
    }

    public function getMaxid($table_name='')
    {

        $maxid_query = "SELECT MAX(id) FROM $table_name ";
        $re = $this->conn->query($maxid_query);
        $max = mysqli_fetch_array($re);
        $maxids = $max[0];
        $maxid = $maxids;
        return $maxid;
    }

	public function get_last_id_today($table_name){
		$today = date('Y-m-d');
		$query = "SELECT COUNT(id) FROM ".$table_name." WHERE save_date = '$today'";
		$res = $this->conn->query($query);
		$row = mysqli_fetch_array($res);

		return $row[0];

	}

    public function getadjustname($jv_id,$action='')
    {

        $jv_query = "SELECT *FROM snit_jv WHERE id = $jv_id";
        $re = $this->conn->query($jv_query);
        $row = mysqli_fetch_array($re);
		$jv_with =	$row['jv_with'];

        $jv_query = "SELECT *FROM snit_jv WHERE id =".$row['jv_with'];
        $res = $this->conn->query($jv_query);
        $row_jv = mysqli_fetch_array($res);


        if($row_jv['jv_type_id'] == 1)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_general_transaction WHERE jv_id = $jv_with ");
			}
            $gen_query = "SELECT gt.purpose_id, gt.reason, g.name FROM snit_general_transaction AS gt LEFT JOIN snit_general_ledger AS g ON g.id = gt.purpose_id WHERE gt.id =".$row_jv['transaction_id'];
            $res = $this->conn->query($gen_query);
            $row = mysqli_fetch_array($res);
            return $row['name'].' ('.$row['reason'].') ';
        }
        if($row_jv['jv_type_id'] == 2)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_party_transaction WHERE jv_id = $jv_with ");
			}

            $gen_query = "SELECT pt.company_id, p.com_name FROM snit_party_transaction AS pt LEFT JOIN snit_party AS p ON p.id = pt.company_id WHERE pt.id =".$row_jv['transaction_id'];
            $res = $this->conn->query($gen_query);
            $row = mysqli_fetch_array($res);
            return $row['com_name'];
        }
        if($row_jv['jv_type_id'] == 3)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_bank WHERE jv_id = $jv_with ");
			}

            $gen_query = "SELECT bt.bank_id, b.bank_name, b.account_number FROM snit_bank AS bt LEFT JOIN snit_bank_list AS b ON b.id = bt.bank_id WHERE bt.id =".$row_jv['transaction_id'];
            $res = $this->conn->query($gen_query);
            $row = mysqli_fetch_array($res);
            return $row['bank_name'].' - '.$row['account_number'];
        }
        if($row_jv['jv_type_id'] == 4)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_cash WHERE jv_id = $jv_with ");
			}

            return 'Cash (JV) ';
        }
        if($row_jv['jv_type_id'] == 5)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_product_purchase WHERE jv_id = $jv_with ");
			}

            $gen_query = "SELECT pp.product_id, p.product_name FROM snit_product_purchase AS pp LEFT JOIN snit_products AS p ON p.id = pp.product_id WHERE pp.id =".$row_jv['transaction_id'];
            $res = $this->conn->query($gen_query);
            $row = mysqli_fetch_array($res);
            return $row['product_name'];
        }
        if($row_jv['jv_type_id'] == 6)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_sales WHERE jv_id = $jv_with ");
			}

            return 'Sales (JV) ';
        }
		if($row_jv['jv_type_id'] == 7)
        {
			if($action == "delete"){
				$this->conn->query("DELETE FROM snit_service WHERE jv_id = $jv_with ");
			}

            return 'Service (JV) ';
        }

		if($row_jv['jv_type_id'] == 8)
        {
			if($action == "delete"){
			     $this->conn->query("DELETE FROM snit_fixed_asset_transaction WHERE jv_id = $jv_with ");
                             $this->conn->query("DELETE FROM snit_fixed_asset_depreciation WHERE fixed_asset_tr_id =".$row_jv['transaction_id']);
			}

            $gen_query = "SELECT ft.fixed_asset_id, fa.asset_name FROM snit_fixed_asset_transaction AS ft LEFT JOIN snit_fixed_asset_list AS fa ON fa.id = ft.fixed_asset_id WHERE ft.id =".$row_jv['transaction_id'];
            $res = $this->conn->query($gen_query);
            $row = mysqli_fetch_array($res);
            return $row['asset_name'];
        }


    }

    public function update_table($table_name, $field_name, $data, $id){
        $update_query = "UPDATE $table_name SET $field_name = $data WHERE id = $id";
        $this->conn->query($update_query);
    }

    public function update_balance($product_id,$product_quantity,$total_price,$operation){

        $check_query = "SELECT * FROM snit_balance WHERE product_id = $product_id ";
        $check_res = $this->conn->query($check_query);
        $check_row = mysqli_fetch_array($check_res);

        if($operation == 'add'){
          $update_quantity = $check_row['product_quantity'] + $product_quantity;
          $update_price = $check_row['total_price'] + $total_price;
        }else{
          $update_quantity = $check_row['product_quantity'] - $product_quantity;
          $update_price = $check_row['total_price'] - $total_price;
        }

        $update_query = "UPDATE snit_balance SET product_quantity = '$update_quantity', total_price = '$update_price' WHERE product_id =  $product_id";
        $this->conn->query($update_query);

    }

    public function get_last_product_trans($master_id,$product_id){
        $max_product_query = "SELECT MAX(id) FROM snit_store_master WHERE product_id = $product_id ";
        $res = $this->conn->query($max_product_query);
        $row = mysqli_fetch_array($res);
        $max_id = $row[0];
        if($max_id == $master_id ){
            $pquery = "SELECT * FROM snit_store_master  WHERE snit_store_master.id = ".$master_id;
            $res = $this->conn->query($pquery);
            $row = mysqli_fetch_array($res);
            return '&received_id='.$row['received_id'].'&issue_id='.$row['issue_id'];
        }else{
            return '';
        }
    }

	public function check_access($val){
        if(isset($_SESSION['uid'])){
            $uid = $_SESSION['uid'];
            $group_row = $this->conn->query("SELECT u.id, u.published, u.g_id, g.group_name, g.group_access_link, g.published FROM snit_users AS u LEFT JOIN snit_users_group AS g ON u.g_id = g.id WHERE u.id = $uid");
            $res = mysqli_fetch_array($group_row);
            $access_links = $res['group_access_link'];
            $glinkar = explode(",",$access_links);

            if(in_array($val, $glinkar))
            {
              return true;
            }
            else
            {
              return false;
            }
        }
    }

	public function tender_list($list_id='',$list_name='',$select_id,$required=''){
        if(!$list_name){ $list_name = 'tender_id'; }
		if($required == 'required'){$required = 'required';}
        $query = 'SELECT w.id, w.name FROM snit_tender_list AS w WHERE status = 1';
        $res = $this->conn->query($query);
        $str_tender_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$required.' style="width:200px"><option value="">Select Tender</option>';
        while($tender =  mysqli_fetch_array($res) ){
            if($tender['id'] == $select_id){
              $sl= 'selected="selected"';
            }else{
              $sl = '';
            }
            $str_tender_list = $str_tender_list.'<option value="'.$tender['id'].'" '.$sl.'>'.$tender['name'].'</option>';
        }
        $str_tender_list = $str_tender_list .'</select>';
        return $str_tender_list;
    }

	public function get_fixed_assets_list($list_id='',$edit_id='',$req=''){
		if(!$list_id){$list_id = 'fixed_asset_id';}
		if($req == 'required'){$req = 'required';}

		$query = 'SELECT * FROM snit_fixed_asset_list WHERE status = 1 AND deleted = 0 ORDER BY asset_name';
		$res = $this->conn->query($query);
 		$str_purpose = '<select name="'.$list_id.'" '.$req.' class="searchable" style="width:350px"><option value="">Select Fixed Asset</option>';
		while($purpose =  mysqli_fetch_array($res) ){
			if($edit_id == $purpose['id']){
				$sl= 'selected="selected"';
			}else{
				$sl = '';
			}
 			$str_purpose = $str_purpose.'<option value="'.$purpose['id'].'" '.$sl.'>'.$purpose['asset_name'].'</option>';
		}
		$str_purpose = $str_purpose .'</select>';
		return $str_purpose;
    }

	public function get_tender_name($tender_id)
    {
        $party_name_query = "SELECT *FROM snit_tender_list where id =".$tender_id;
        $res = $this->conn->query($party_name_query);
        $row = mysqli_fetch_array($res);
        return $row['name'];
    }

	public function db_date($pdate){
		$date = date("Y-m-d", strtotime($pdate));
		return $date;
	}

	public function view_date($pdate){
		if($pdate && $pdate !='0000-00-00'){
			$date = date("d-m-Y", strtotime($pdate));
			return $date;
		}
	}

	public function get_fiscal_year_start_date(){
		$fiscal_year_query = "SELECT * FROM snit_settings WHERE company_id = 1";
		$res = $this->conn->query($fiscal_year_query);
		$row = mysqli_fetch_array($res);
		return $row['fiscal_year_start_date'];
	}

        public function get_fiscal_year_end_date(){
		$fiscal_year_query = "SELECT * FROM snit_settings WHERE company_id = 1";
		$res = $this->conn->query($fiscal_year_query);
		$row = mysqli_fetch_array($res);
		return $row['fiscal_year_end_date'];
	}


	public function get_settings_data($filed_name) {
		$settings_field_query = "SELECT * FROM snit_settings WHERE 1";
		$res = $this->conn->query($settings_field_query);
		$row = mysqli_fetch_array($res);
		return $row[$filed_name];
	}

	public function get_product_category_list($list_name='',$list_id='',$edit_id='',$req='')
    {
        if(!$list_name){ $list_name = 'category_id'; }
		if($req == 'required'){$req = 'required';}
        $query = 'SELECT * FROM snit_categories WHERE status = 1 AND deleted = 0 ORDER BY category_name';
		$res = $this->conn->query($query);
		$cat_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$req.' class="searchable" style="width:200px">';
        $cat_list = $cat_list.'<option value="">Select Category</option>';
		while($category =  mysqli_fetch_array($res) )
		{
	            if($category['id'] == $edit_id){
	              $sl= 'selected="selected"';
	            }else{
	              $sl = '';
	            }
	            $cat_list = $cat_list.'<option value="'.$category['id'].'" '.$sl.'>'.$category['category_name'].'</option>';
		}
		$cat_list = $cat_list.'</select>';
		return $cat_list;

    }
	public function get_bank_discount($bank_id){

		$result = $this->conn->query("SELECT bank_discount FROM snit_bank_list where id  = $bank_id");
		$row = mysqli_fetch_array($result);
		return $row['bank_discount'];

	}

       public function unit_list($list_name='',$pid='',$req='',$list_id=''){

          if(!$list_name){ $list_name = 'unit_id'; }
		if($req == 'required'){$req = 'required';}
        $query = 'SELECT * FROM snit_units WHERE status = 1 AND deleted = 0 ORDER BY unit_name';
		$res = $this->conn->query($query);
		$party_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$req.' class="searchable" style="width:200px" onChange="showUser(this.value)">';
        $party_list = $party_list.'<option value="">Select Unit</option>';
		while($party =  mysqli_fetch_array($res) )
		{
	            if($party['unit_id'] == $pid){
	              $sl= 'selected="selected"';
	            }else{
	              $sl = '';
	            }
	            $party_list = $party_list.'<option value="'.$party['unit_id'].'" '.$sl.'>'.$party['unit_name'].'</option>';
		}
		$party_list = $party_list.'</select>';
		return $party_list;
      }


      public function vendor_list($list_name='',$pid='',$req='',$list_id=''){

          if(!$list_name){ $list_name = 'vendor_id'; }
		if($req == 'required'){$req = 'required';}
        $query = 'SELECT * FROM snit_vendors WHERE status = 1 AND deleted = 0 ORDER BY vendor_name';
		$res = $this->conn->query($query);
		$party_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$req.' class="searchable" style="width:200px">';
        $party_list = $party_list.'<option value="">Select SR</option>';
                $sl = '';
		while($party =  mysqli_fetch_array($res) )
		{
	            if($party['vendor_id'] == $pid){
	              $sl= 'selected="selected"';
	            }else{
	              $sl = '';
	            }
	            $party_list = $party_list.'<option value="'.$party['vendor_id'].'" '.$sl.'>'.$party['vendor_name'].'</option>';
		}
		$party_list = $party_list.'</select>';
		return $party_list;
      }




	public function department_list($list_name='',$pid='',$req='',$list_id='')
    {
        if(!$list_name){ $list_name = 'department_id'; }
		if($req == 'required'){$req = 'required';}
        $query = 'SELECT * FROM snit_departments WHERE status = 1 AND deleted = 0 ORDER BY department_name';
		$res = $this->conn->query($query);
		$party_list = '<select id="'.$list_id.'" name="'.$list_name.'" '.$req.' class="searchable" style="width:200px" onChange="showUser(this.value)">';
        $party_list = $party_list.'<option value="">Select Department</option>';
		while($party =  mysqli_fetch_array($res) )
		{
	            if($party['id'] == $pid){
	              $sl= 'selected="selected"';
	            }else{
	              $sl = '';
	            }
	            $party_list = $party_list.'<option value="'.$party['id'].'" '.$sl.'>'.$party['department_name'].'</option>';
		}
		$party_list = $party_list.'</select>';
		return $party_list;

    }


	public function get_department_name($department_id){
		$party_name_query = "SELECT *FROM snit_departments where id =".$department_id;
        $res = $this->conn->query($party_name_query);
        $row = mysqli_fetch_array($res);
        return $row['department_name'];

	}

       public function get_user_info($uid){
          $user_query = "SELECT *FROM snit_users where id =".$uid;
          $res = $this->conn->query($user_query );
          return $row = mysqli_fetch_array($res);
       }

       public function get_challan_number($master_id){

         $issue_challn_query = "SELECT issue_chalan_no FROM  snit_store_issue where master_id =".$master_id;
         $res = $this->conn->query($issue_challn_query );
         $row = mysqli_fetch_array($res);
         return $row['issue_chalan_no'];

       }


     public function get_debit_amount($table_name,$start_date,$end_date,$where=''){
        $debit_query = "SELECT SUM(amount) FROM $table_name WHERE $where bill_type = 1 AND save_date BETWEEN '$start_date' AND '$end_date'";
        $res = $this->conn->query($debit_query);
        $row = mysqli_fetch_array($res);
        return $row[0];
    }
    public function get_credit_amount($table_name,$start_date,$end_date,$where=''){
        $debit_query = "SELECT SUM(amount) FROM $table_name WHERE $where bill_type = 2 AND save_date BETWEEN '$start_date' AND '$end_date'";
        $res = $this->conn->query($debit_query);
        $row = mysqli_fetch_array($res);
        return $row[0];
    }

    function get_quantity($master_id){
      $total_quantity = 0;
      $quantity_query = "SELECT issued_units from snit_store_issue WHERE master_id = ".$master_id;
      $res = $this->conn->query($quantity_query);
      while($row = mysqli_fetch_array($res)){
        $total_quantity = $total_quantity + $row['issued_units'];
      }

      return $total_quantity;

    }
    function auto_generate_bill_no(){
        date_default_timezone_set('asia/dhaka');
        $maxidday = self::get_last_id_today('snit_cash');
        $maxidday = $maxidday + 1;
        //$bill_no = date('dmYGi').'-'.$maxidday;
        $bill_no = date('dmY').'-'.$maxidday;
        return $bill_no;
    }

    public function cash_in_hand(){
        $cash_query = "SELECT c.id, c.bill_type, c.amount, c.save_date FROM snit_cash AS c WHERE 1 ORDER BY c.save_date, c.id ASC";

        $res = $this->conn->query($cash_query);
        $balance = 0;

        while($report =  mysqli_fetch_array($res) ){
            $damount = 0;
            $camount = 0;

            if($report['bill_type'] == 1){
                $damount = $report['amount'];
                $balance = $balance + $damount;
            }else{
                $camount = $report['amount'];
                $balance = $balance - $camount;
            }
        }

        if($balance < 0){
            $current_balance = number_format(abs($balance),2)." (Cr)";
        }else{
            $current_balance = number_format(abs($balance),2)." (Dr)";
        }

        return $current_balance;
    }

    public function total_sale($day){
        $date = date('Y-m-d');
        $day_before = date( 'Y-m-d', strtotime( $date . ' -'.$day.' day' ) );

        $sales_query = "SELECT s.product_id, s.master_id, s.master_id, s.company_id, s.bill_type, s.types, s.amount, s.save_date, s.bill_no, s.form_id, s.jv_id, s.vat, s.ait, c.com_name, b.bank_name,b.account_number, p.product_name FROM snit_sales AS s LEFT JOIN snit_party AS c ON s.company_id = c.id LEFT JOIN snit_bank_list AS b ON b.id = s.bank_id LEFT JOIN snit_products p ON p.id = s.product_id WHERE s.save_date = '$day_before' ORDER BY s.save_date, s.id ASC";
        $res = $this->conn->query($sales_query);

        $balance = 0;
        $total_debit_amount = 0;
        $total_credit_amount = 0;
        $i = 0;

        while($report =  mysqli_fetch_array($res) )
        {
            $damount = 0;
            $camount = 0;

            if($report['bill_type'] == 1)
            {
                $billtype = "Dr";
                $damount = $report['amount'];
                $balance = $balance + $damount + $report['vat'] + $report['ait'];
                $show_balance = abs(round($balance,2));

                $sbalance = number_format($balance,2);

                if($balance < 0)
                {
                  $sbalance = '( '.$sbalance.' )' ;
                }
                else
                {
                    $sbalance = number_format($balance,2);
                }
            }

            if($report['bill_type'] == 2)
            {

                $billtype = "Cr";
                $camount = $report['amount'];

                $balance = $balance - $camount - $report['vat'] - $report['ait'];
                $show_balance = abs(round($balance,2));
                $sbalance = number_format($balance,2);

                if($balance < 0)
                {
                    $sbalance = '( '.$sbalance.' )' ;
                }
                else
                {
                    $sbalance = number_format($balance,2);
                }
            }
            $i++;
        }

        if($balance < 0){
          $current_balance = number_format(abs($balance),2)." (Cr)";
        }else{
          $current_balance = number_format(abs($balance),2)." (Dr)";
        }

        return $current_balance;
    }

  public function get_generic_name_list($list_id='',$edit_id='',$req=''){
    if(!$list_id){$list_id = 'generic_name_id';}
    if($req == 'required'){$req = 'required';}
    $query = "SELECT * FROM snit_generic_list WHERE status = 1 AND deleted = 0 ORDER BY generic_name";
    $res = $this->conn->query($query);
    $str_generic = '<select id="'.$list_id.'" name="'.$list_id.'" '.$req.' class="select2" style="width:350px"><option value="">Select Generic Name </option>';
    while($generic =  mysqli_fetch_array($res) ){
      if($edit_id == $generic['id']){
        $sl= 'selected="selected"';
      }else{
        $sl = '';
      }
      $str_generic = $str_generic.'<option value="'.$generic['id'].'" '.$sl.'>'.$generic['generic_name'].'</option>';
    }
    $str_generic = $str_generic .'</select>';
    return $str_generic;
  }
  public function get_product_name($product_id){
    if($product_id != 0){
      $product_name_query = "SELECT *FROM snit_products WHERE id = ".$product_id;
      $product_name_result = $this->conn->query($product_name_query);
      $product = mysqli_fetch_array($product_name_result);
      $product_name = '';
      $product_name = $product['product_name'];
      if($product['product_number']){
        $product_name = $product_name.'-'.$product['product_number'];
      }
      return $product_name;
    }
  }

}

?>
