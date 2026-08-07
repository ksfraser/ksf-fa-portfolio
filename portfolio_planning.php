<?php
/** Portfolio Analytics planning admin page — ksf_fa_portfolio. @package Ksfraser\FA\Portfolio */
namespace Ksfraser\FA\Portfolio;
function portfolio_planning_page(): void {
    $debtor_no = (int) ($_REQUEST['debtor_no'] ?? 0);
    echo '<h2>Portfolio Analytics Planning</h2><p>', htmlentities(render_page($debtor_no)), '</p>';
}
