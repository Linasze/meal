<?php
  if(count($break) <= 1){
    $products1 = $this->productModel->getProductById($break[0]);
 }elseif(count($break) <= 2){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
 }elseif(count($break) <= 3){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
   
 }elseif(count($break) <= 4){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
}elseif(count($break) <= 5){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
    $products5 = $this->productModel->getProductById($break[4]);

}elseif(count($break) <= 6){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
    $products5 = $this->productModel->getProductById($break[4]);
    $products6 = $this->productModel->getProductById($break[5]);

}elseif(count($break) <= 7){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
    $products5 = $this->productModel->getProductById($break[4]);
    $products6 = $this->productModel->getProductById($break[5]);
    $products7 = $this->productModel->getProductById($break[6]);

}
elseif(count($break) <= 8){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
    $products5 = $this->productModel->getProductById($break[4]);
    $products6 = $this->productModel->getProductById($break[5]);
    $products7 = $this->productModel->getProductById($break[6]);
    $products8 = $this->productModel->getProductById($break[7]);
   
}
elseif(count($break) <= 9){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
    $products5 = $this->productModel->getProductById($break[4]);
    $products6 = $this->productModel->getProductById($break[5]);
    $products7 = $this->productModel->getProductById($break[6]);
    $products8 = $this->productModel->getProductById($break[7]);
    $products9 = $this->productModel->getProductById($break[8]);
    
}
elseif(count($break) <= 10){
    $products1 = $this->productModel->getProductById($break[0]);
    $products2 = $this->productModel->getProductById($break[1]);
    $products3 = $this->productModel->getProductById($break[2]);
    $products4 = $this->productModel->getProductById($break[3]);
    $products5 = $this->productModel->getProductById($break[4]);
    $products6 = $this->productModel->getProductById($break[5]);
    $products7 = $this->productModel->getProductById($break[6]);
    $products8 = $this->productModel->getProductById($break[7]);
    $products9 = $this->productModel->getProductById($break[8]);
    $products10 = $this->productModel->getProductById($break[9]);
}

?>