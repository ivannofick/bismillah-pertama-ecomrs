
<?php
$admin = $this->session->userdata('admin');
$customer = $this->session->userdata('customer');
	echo $customer;
if ($admin == 'adm') {
echo $admin;
	echo "tidak cust";

}elseif ($customer == 'cust'){
	echo $customer;
	echo "iki cust";
}
?>
<br><a href='<?php echo site_url('dashboard/keluar');?>'>metu</a>