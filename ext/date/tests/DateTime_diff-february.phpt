--TEST--
DateTime::diff() -- february 
--CREDITS--
Daniel Convissor <danielc@php.net>
--FILE--
<?php

require 'examine_diff.inc';
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_DIFF);
require 'DateTime_data-february.inc';

?>
--EXPECT--
test_bug_49081__1: DIFF: 2010-03-31 00:00:00 EDT - 2010-03-01 00:00:00 EST = **P+0Y0M30DT0H0M0S**
test_bug_49081__2: DIFF: 2010-04-01 00:00:00 EDT - 2010-03-01 00:00:00 EST = **P+0Y1M0DT0H0M0S**
test_bug_49081__3: DIFF: 2010-04-01 00:00:00 EDT - 2010-03-31 00:00:00 EDT = **P+0Y0M1DT0H0M0S**
test_bug_49081__4: DIFF: 2010-04-29 00:00:00 EDT - 2010-03-31 00:00:00 EDT = **P+0Y0M29DT0H0M0S**
test_bug_49081__5: DIFF: 2010-04-30 00:00:00 EDT - 2010-03-31 00:00:00 EDT = **P+0Y0M30DT0H0M0S**
test_bug_49081__6: DIFF: 2010-04-30 00:00:00 EDT - 2010-03-30 00:00:00 EDT = **P+0Y1M0DT0H0M0S**
test_bug_49081__7: DIFF: 2010-04-30 00:00:00 EDT - 2010-03-29 00:00:00 EDT = **P+0Y1M1DT0H0M0S**
test_bug_49081__8: DIFF: 2010-01-29 00:00:00 EST - 2010-01-01 00:00:00 EST = **P+0Y0M28DT0H0M0S**
test_bug_49081__9: DIFF: 2010-01-30 00:00:00 EST - 2010-01-01 00:00:00 EST = **P+0Y0M29DT0H0M0S**
test_bug_49081__10: DIFF: 2010-01-31 00:00:00 EST - 2010-01-01 00:00:00 EST = **P+0Y0M30DT0H0M0S**
test_bug_49081__11: DIFF: 2010-02-01 00:00:00 EST - 2010-01-01 00:00:00 EST = **P+0Y1M0DT0H0M0S**
test_bug_49081__12: DIFF: 2010-02-01 00:00:00 EST - 2010-01-31 00:00:00 EST = **P+0Y0M1DT0H0M0S**
test_bug_49081__13: DIFF: 2010-02-27 00:00:00 EST - 2010-01-31 00:00:00 EST = **P+0Y0M27DT0H0M0S**
test_bug_49081__14: DIFF: 2010-02-28 00:00:00 EST - 2010-01-31 00:00:00 EST = **P+0Y0M28DT0H0M0S**
test_bug_49081__15: DIFF: 2010-02-28 00:00:00 EST - 2010-01-30 00:00:00 EST = **P+0Y0M29DT0H0M0S**
test_bug_49081__16: DIFF: 2010-02-28 00:00:00 EST - 2010-01-29 00:00:00 EST = **P+0Y0M30DT0H0M0S**
test_bug_49081__17: DIFF: 2010-02-28 00:00:00 EST - 2010-01-28 00:00:00 EST = **P+0Y1M0DT0H0M0S**
test_bug_49081__18: DIFF: 2010-02-28 00:00:00 EST - 2010-01-27 00:00:00 EST = **P+0Y1M1DT0H0M0S**
test_bug_49081__19: DIFF: 2010-03-01 00:00:00 EST - 2010-01-01 00:00:00 EST = **P+0Y2M0DT0H0M0S**
test_bug_49081__20: DIFF: 2010-03-01 00:00:00 EST - 2010-01-31 00:00:00 EST = **P+0Y1M1DT0H0M0S**
test_bug_49081__21: DIFF: 2010-03-27 00:00:00 EDT - 2010-01-31 00:00:00 EST = **P+0Y1M24DT0H0M0S**
test_bug_49081__22: DIFF: 2010-03-28 00:00:00 EDT - 2010-01-31 00:00:00 EST = **P+0Y1M25DT0H0M0S**
test_bug_49081__23: DIFF: 2010-03-29 00:00:00 EDT - 2010-01-31 00:00:00 EST = **P+0Y1M26DT0H0M0S**
test_bug_49081__24: DIFF: 2010-03-30 00:00:00 EDT - 2010-01-31 00:00:00 EST = **P+0Y1M27DT0H0M0S**
test_bug_49081__25: DIFF: 2010-03-31 00:00:00 EDT - 2010-01-31 00:00:00 EST = **P+0Y2M0DT0H0M0S**
test_bug_49081__26: DIFF: 2010-03-31 00:00:00 EDT - 2010-01-30 00:00:00 EST = **P+0Y2M1DT0H0M0S**
test_bug_49081__27: DIFF: 2009-01-31 00:00:00 EST - 2009-01-01 00:00:00 EST = **P+0Y0M30DT0H0M0S**
test_bug_49081__28: DIFF: 2010-03-27 00:00:00 EDT - 2010-02-28 00:00:00 EST = **P+0Y0M27DT0H0M0S**
test_bug_49081__29: DIFF: 2010-03-28 00:00:00 EDT - 2010-02-28 00:00:00 EST = **P+0Y1M0DT0H0M0S**
test_bug_49081__30: DIFF: 2010-03-29 00:00:00 EDT - 2010-02-28 00:00:00 EST = **P+0Y1M1DT0H0M0S**
test_bug_49081__31: DIFF: 2010-03-27 00:00:00 EDT - 2010-02-27 00:00:00 EST = **P+0Y1M0DT0H0M0S**
test_bug_49081__32: DIFF: 2010-03-27 00:00:00 EDT - 2010-02-26 00:00:00 EST = **P+0Y1M1DT0H0M0S**
test_bug_49081_negative__1: DIFF: 2010-03-01 00:00:00 EST - 2010-03-31 00:00:00 EDT = **P-0Y0M30DT0H0M0S**
test_bug_49081_negative__2: DIFF: 2010-03-01 00:00:00 EST - 2010-04-01 00:00:00 EDT = **P-0Y1M0DT0H0M0S**
test_bug_49081_negative__3: DIFF: 2010-03-31 00:00:00 EDT - 2010-04-01 00:00:00 EDT = **P-0Y0M1DT0H0M0S**
test_bug_49081_negative__4: DIFF: 2010-03-31 00:00:00 EDT - 2010-04-29 00:00:00 EDT = **P-0Y0M29DT0H0M0S**
test_bug_49081_negative__5: DIFF: 2010-03-31 00:00:00 EDT - 2010-04-30 00:00:00 EDT = **P-0Y0M30DT0H0M0S**
test_bug_49081_negative__6: DIFF: 2010-03-30 00:00:00 EDT - 2010-04-30 00:00:00 EDT = **P-0Y1M0DT0H0M0S**
test_bug_49081_negative__7: DIFF: 2010-03-29 00:00:00 EDT - 2010-04-30 00:00:00 EDT = **P-0Y1M1DT0H0M0S**
test_bug_49081_negative__8: DIFF: 2010-01-01 00:00:00 EST - 2010-01-29 00:00:00 EST = **P-0Y0M28DT0H0M0S**
test_bug_49081_negative__9: DIFF: 2010-01-01 00:00:00 EST - 2010-01-30 00:00:00 EST = **P-0Y0M29DT0H0M0S**
test_bug_49081_negative__10: DIFF: 2010-01-01 00:00:00 EST - 2010-01-31 00:00:00 EST = **P-0Y0M30DT0H0M0S**
test_bug_49081_negative__11: DIFF: 2010-01-01 00:00:00 EST - 2010-02-01 00:00:00 EST = **P-0Y1M0DT0H0M0S**
test_bug_49081_negative__12: DIFF: 2010-01-31 00:00:00 EST - 2010-02-01 00:00:00 EST = **P-0Y0M1DT0H0M0S**
test_bug_49081_negative__13: DIFF: 2010-01-31 00:00:00 EST - 2010-02-27 00:00:00 EST = **P-0Y0M27DT0H0M0S**
test_bug_49081_negative__14: DIFF: 2010-01-31 00:00:00 EST - 2010-02-28 00:00:00 EST = **P-0Y0M28DT0H0M0S**
test_bug_49081_negative__15: DIFF: 2010-01-30 00:00:00 EST - 2010-02-28 00:00:00 EST = **P-0Y0M29DT0H0M0S**
test_bug_49081_negative__16: DIFF: 2010-01-29 00:00:00 EST - 2010-02-28 00:00:00 EST = **P-0Y0M30DT0H0M0S**
test_bug_49081_negative__17: DIFF: 2010-01-28 00:00:00 EST - 2010-02-28 00:00:00 EST = **P-0Y1M0DT0H0M0S**
test_bug_49081_negative__18: DIFF: 2010-01-27 00:00:00 EST - 2010-02-28 00:00:00 EST = **P-0Y1M1DT0H0M0S**
test_bug_49081_negative__19: DIFF: 2010-01-01 00:00:00 EST - 2010-03-01 00:00:00 EST = **P-0Y2M0DT0H0M0S**
test_bug_49081_negative__20: DIFF: 2010-01-31 00:00:00 EST - 2010-03-01 00:00:00 EST = **P-0Y1M1DT0H0M0S**
test_bug_49081_negative__21: DIFF: 2010-01-31 00:00:00 EST - 2010-03-27 00:00:00 EDT = **P-0Y1M27DT0H0M0S**
test_bug_49081_negative__22: DIFF: 2010-01-31 00:00:00 EST - 2010-03-28 00:00:00 EDT = **P-0Y1M28DT0H0M0S**
test_bug_49081_negative__23: DIFF: 2010-01-31 00:00:00 EST - 2010-03-29 00:00:00 EDT = **P-0Y1M29DT0H0M0S**
test_bug_49081_negative__24: DIFF: 2010-01-31 00:00:00 EST - 2010-03-30 00:00:00 EDT = **P-0Y1M30DT0H0M0S**
test_bug_49081_negative__25: DIFF: 2010-01-31 00:00:00 EST - 2010-03-31 00:00:00 EDT = **P-0Y2M0DT0H0M0S**
test_bug_49081_negative__26: DIFF: 2010-01-30 00:00:00 EST - 2010-03-31 00:00:00 EDT = **P-0Y2M1DT0H0M0S**
test_bug_49081_negative__27: DIFF: 2009-01-01 00:00:00 EST - 2009-01-31 00:00:00 EST = **P-0Y0M30DT0H0M0S**
test_bug_49081_negative__28: DIFF: 2010-02-28 00:00:00 EST - 2010-03-27 00:00:00 EDT = **P-0Y0M27DT0H0M0S**
test_bug_49081_negative__29: DIFF: 2010-02-28 00:00:00 EST - 2010-03-28 00:00:00 EDT = **P-0Y1M0DT0H0M0S**
test_bug_49081_negative__30: DIFF: 2010-02-28 00:00:00 EST - 2010-03-29 00:00:00 EDT = **P-0Y1M1DT0H0M0S**
test_bug_49081_negative__31: DIFF: 2010-02-27 00:00:00 EST - 2010-03-27 00:00:00 EDT = **P-0Y1M0DT0H0M0S**
test_bug_49081_negative__32: DIFF: 2010-02-26 00:00:00 EST - 2010-03-27 00:00:00 EDT = **P-0Y1M1DT0H0M0S**
