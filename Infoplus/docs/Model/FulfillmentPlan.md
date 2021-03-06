# FulfillmentPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**name** | **string** |  | 
**description** | **string** |  | [optional] 
**warehouse_id** | **int** |  | 
**priority_code** | **int** |  | [optional] 
**last_run_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**order_smart_filter_id** | **int** |  | 
**location_smart_filter_id** | **int** |  | [optional] 
**max_orders** | **int** |  | [optional] 
**batch_size_max** | **int** |  | [optional] 
**batch_size_min** | **int** |  | [optional] 
**max_cartons** | **int** |  | [optional] 
**version** | **string** |  | [optional] 
**is_mass_distribution** | **bool** |  | [optional] [default to false]
**create_pick_work** | **bool** |  | [default to false]
**picking_rule** | **string** |  | [optional] 
**pick_batch_group_id** | **string** |  | [optional] 
**max_sk_us_per_batch** | **int** |  | [optional] 
**layout_rule** | **string** |  | [optional] 
**pick_sort_rule** | **string** |  | [optional] 
**location_sort** | **string** |  | [optional] 
**create_pick_list** | **bool** |  | [optional] [default to false]
**pick_list_format** | **string** |  | [optional] 
**pick_list_layout** | **string** |  | [optional] 
**pick_list_group** | **string** |  | [optional] 
**pick_list_sort** | **string** |  | [optional] 
**pick_list_location_sort** | **string** |  | [optional] 
**create_pick_summary** | **bool** |  | [optional] [default to false]
**pick_summary_format** | **string** |  | [optional] 
**pick_summary_layout** | **string** |  | [optional] 
**pick_summary_sort** | **string** |  | [optional] 
**pick_scan_scheme_id** | **int** |  | 
**cartonize_orders** | **bool** |  | [default to false]
**cartonization_script_id** | **int** |  | [optional] 
**auto_ship_casebreak_cartons** | **bool** |  | [optional] [default to false]
**auto_ship_orders** | **bool** |  | [optional] [default to false]
**pre_generate_parcel_labels** | **bool** |  | [optional] [default to false]
**label_sort** | **string** |  | [optional] 
**create_packing_slip** | **string** |  | 
**override_packing_slip_template_id** | **int** |  | [optional] 
**create_order_assembly_guide** | **bool** |  | [optional] [default to false]
**order_assembly_guide_layout** | **string** |  | [optional] 
**create_order_invoice** | **string** |  | 
**override_order_invoice_template_id** | **int** |  | [optional] 
**create_carton_gs1128_labels** | **string** |  | [optional] 
**create_line_item_each_gs1128_labels** | **string** |  | [optional] 
**send_to_external_shipping_system** | **bool** |  | [default to false]
**external_shipping_system_id** | **int** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


