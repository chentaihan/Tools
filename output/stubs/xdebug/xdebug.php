<?php
function xdebug_get_stack_depth () {}
function xdebug_get_function_stack ($message = '', $options = 0) {}
function xdebug_print_function_stack () {}
function xdebug_get_declared_vars () {}
function xdebug_call_file () {}
function xdebug_call_class () {}
function xdebug_call_function () {}
function xdebug_call_line () {}
function xdebug_start_function_monitor ( array $list_of_functions_to_monitor ) {}
function xdebug_stop_function_monitor () {}
function xdebug_get_monitored_functions () {}
function xdebug_var_dump ($var) {}
function xdebug_debug_zval ($varName) {}
function xdebug_debug_zval_stdout ($varName) {}
function xdebug_enable () {}
function xdebug_disable () {}
function xdebug_is_enabled () {}
function xdebug_start_error_collection () {}
function xdebug_stop_error_collection () {}
function xdebug_get_collected_errors ($clean = false) {}
function xdebug_break () {}
function xdebug_start_trace ($trace_file, $options = 0) {}
function xdebug_stop_trace () {}
function xdebug_get_tracefile_name () {}
function xdebug_get_profiler_filename () {}
function xdebug_dump_aggr_profiling_data () {}
function xdebug_clear_aggr_profiling_data () {}
function xdebug_memory_usage () {}
function xdebug_peak_memory_usage () {}
function xdebug_time_index () {}
function xdebug_start_code_coverage ($options = 0) {}
function xdebug_stop_code_coverage ($cleanup = true) {}
function xdebug_code_coverage_started () {}
function xdebug_get_code_coverage () {}
function xdebug_get_function_count () {}
function xdebug_dump_superglobals () {}
function xdebug_get_headers () {}
define ('XDEBUG_STACK_NO_DESC', 1);
define ('XDEBUG_TRACE_APPEND', 1);
define ('XDEBUG_TRACE_COMPUTERIZED', 2);
define ('XDEBUG_TRACE_HTML', 4);
define ('XDEBUG_TRACE_NAKED_FILENAME', 8);
define ('XDEBUG_CC_UNUSED', 1);
define ('XDEBUG_CC_DEAD_CODE', 2);
define ('XDEBUG_CC_BRANCH_CHECK', 4);
