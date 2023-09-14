## Source Code
<a href="https://github.com/garyjdn/olympic-test/blob/main/app/Http/Controllers/PageController.php">Source Code</a>

## Run the Project

./vendor/bin/sail up
## Jawaban SOAL Database Dasar

1. 
```sql
SELECT
    mar_tra_order.id AS 'Nomor Order',
    mar_tra_order.created_at AS 'Tanggal Order',
    mar_mas_customer.name AS 'Nama Customer',
    mar_mas_customer.address AS 'Alamat Customer',
    mar_mas_customer.city AS 'Kota Customer',
    mar_mas_customer.province AS 'Provinsi Customer',
    mar_mas_marketplace.store_name AS 'Nama Toko Marketplace',
    mar_mas_expedition.name AS 'Nama Ekspedisi',
    SUM(mar_mas_item.price * mar_tra_order_detail.qty) AS 'Total Harga Pembelian'
FROM
    mar_tra_order
JOIN
    mar_mas_customer ON mar_tra_order.customer_id = mar_mas_customer.id
JOIN
    mar_mas_marketplace ON mar_tra_order.marketplace_id = mar_mas_marketplace.id
JOIN
    mar_mas_expedition ON mar_tra_order.expedition_id = mar_mas_expedition.id
JOIN
    mar_tra_order_detail ON mar_tra_order.id = mar_tra_order_detail.order_id
JOIN
    mar_mas_item ON mar_tra_order_detail.item_id = mar_mas_item.id
GROUP BY
    mar_tra_order.id;
```

2.
```sql
SELECT
    mar_mas_item.name AS 'Nama Item',
    mar_mas_item.brand AS 'Brand',
    SUM(mar_tra_order_detail.qty) AS 'Total Qty Terjual'
FROM
    mar_mas_item
JOIN
    mar_tra_order_detail ON mar_mas_item.id = mar_tra_order_detail.item_id
GROUP BY
    mar_mas_item.name,
    mar_mas_item.brand
ORDER BY
    SUM(mar_tra_order_detail.qty) DESC;
```

3.
```sql
SELECT
    mar_mas_item.brand AS 'Brand',
    SUM(mar_tra_order_detail.qty) AS 'Total Kuantiti Terjual'
FROM
    mar_mas_item
JOIN
    mar_tra_order_detail ON mar_mas_item.id = mar_tra_order_detail.item_id
GROUP BY
    mar_mas_item.brand;
```

4.
```sql
SELECT
    mar_mas_expedition.name AS 'Nama Ekspedisi',
    COUNT(mar_tra_order.id) AS 'Total Order'
FROM
    mar_mas_expedition
LEFT JOIN
    mar_tra_order ON mar_mas_expedition.id = mar_tra_order.expedition_id
GROUP BY
    mar_mas_expedition.name;
```