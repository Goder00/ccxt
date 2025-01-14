<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class krakenfutures extends \ccxt\Exchange {
    public function public_get_instruments($params = array()) {
        return $this->request('instruments', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_orderbook($params = array()) {
        return $this->request('orderbook', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_tickers($params = array()) {
        return $this->request('tickers', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_history($params = array()) {
        return $this->request('history', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_historicalfundingrates($params = array()) {
        return $this->request('historicalfundingrates', 'public', 'GET', $params, null, null, array());
    }
    public function private_get_openpositions($params = array()) {
        return $this->request('openpositions', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_notifications($params = array()) {
        return $this->request('notifications', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_accounts($params = array()) {
        return $this->request('accounts', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_openorders($params = array()) {
        return $this->request('openorders', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_recentorders($params = array()) {
        return $this->request('recentorders', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_fills($params = array()) {
        return $this->request('fills', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_transfers($params = array()) {
        return $this->request('transfers', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_leveragepreferences($params = array()) {
        return $this->request('leveragepreferences', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_pnlpreferences($params = array()) {
        return $this->request('pnlpreferences', 'private', 'GET', $params, null, null, array());
    }
    public function private_post_sendorder($params = array()) {
        return $this->request('sendorder', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_editorder($params = array()) {
        return $this->request('editorder', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_cancelorder($params = array()) {
        return $this->request('cancelorder', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_transfer($params = array()) {
        return $this->request('transfer', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_batchorder($params = array()) {
        return $this->request('batchorder', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_cancelallorders($params = array()) {
        return $this->request('cancelallorders', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_cancelallordersafter($params = array()) {
        return $this->request('cancelallordersafter', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_withdrawal($params = array()) {
        return $this->request('withdrawal', 'private', 'POST', $params, null, null, array());
    }
    public function private_put_leveragepreferences($params = array()) {
        return $this->request('leveragepreferences', 'private', 'PUT', $params, null, null, array());
    }
    public function private_put_pnlpreferences($params = array()) {
        return $this->request('pnlpreferences', 'private', 'PUT', $params, null, null, array());
    }
    public function charts_get_price_type_symbol_interval($params = array()) {
        return $this->request('{price_type}/{symbol}/{interval}', 'charts', 'GET', $params, null, null, array());
    }
    public function history_get_orders($params = array()) {
        return $this->request('orders', 'history', 'GET', $params, null, null, array());
    }
    public function history_get_executions($params = array()) {
        return $this->request('executions', 'history', 'GET', $params, null, null, array());
    }
    public function history_get_triggers($params = array()) {
        return $this->request('triggers', 'history', 'GET', $params, null, null, array());
    }
    public function history_get_accountlogcsv($params = array()) {
        return $this->request('accountlogcsv', 'history', 'GET', $params, null, null, array());
    }
    public function history_get_market_symbol_orders($params = array()) {
        return $this->request('market/{symbol}/orders', 'history', 'GET', $params, null, null, array());
    }
    public function history_get_market_symbol_executions($params = array()) {
        return $this->request('market/{symbol}/executions', 'history', 'GET', $params, null, null, array());
    }
    public function feeschedules_get_volumes($params = array()) {
        return $this->request('volumes', 'feeschedules', 'GET', $params, null, null, array());
    }
    public function publicGetInstruments($params = array()) {
        return $this->request('instruments', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetOrderbook($params = array()) {
        return $this->request('orderbook', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetTickers($params = array()) {
        return $this->request('tickers', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetHistory($params = array()) {
        return $this->request('history', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetHistoricalfundingrates($params = array()) {
        return $this->request('historicalfundingrates', 'public', 'GET', $params, null, null, array());
    }
    public function privateGetOpenpositions($params = array()) {
        return $this->request('openpositions', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetNotifications($params = array()) {
        return $this->request('notifications', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetAccounts($params = array()) {
        return $this->request('accounts', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetOpenorders($params = array()) {
        return $this->request('openorders', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetRecentorders($params = array()) {
        return $this->request('recentorders', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetFills($params = array()) {
        return $this->request('fills', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetTransfers($params = array()) {
        return $this->request('transfers', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetLeveragepreferences($params = array()) {
        return $this->request('leveragepreferences', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetPnlpreferences($params = array()) {
        return $this->request('pnlpreferences', 'private', 'GET', $params, null, null, array());
    }
    public function privatePostSendorder($params = array()) {
        return $this->request('sendorder', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostEditorder($params = array()) {
        return $this->request('editorder', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostCancelorder($params = array()) {
        return $this->request('cancelorder', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostTransfer($params = array()) {
        return $this->request('transfer', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostBatchorder($params = array()) {
        return $this->request('batchorder', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostCancelallorders($params = array()) {
        return $this->request('cancelallorders', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostCancelallordersafter($params = array()) {
        return $this->request('cancelallordersafter', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostWithdrawal($params = array()) {
        return $this->request('withdrawal', 'private', 'POST', $params, null, null, array());
    }
    public function privatePutLeveragepreferences($params = array()) {
        return $this->request('leveragepreferences', 'private', 'PUT', $params, null, null, array());
    }
    public function privatePutPnlpreferences($params = array()) {
        return $this->request('pnlpreferences', 'private', 'PUT', $params, null, null, array());
    }
    public function chartsGetPriceTypeSymbolInterval($params = array()) {
        return $this->request('{price_type}/{symbol}/{interval}', 'charts', 'GET', $params, null, null, array());
    }
    public function historyGetOrders($params = array()) {
        return $this->request('orders', 'history', 'GET', $params, null, null, array());
    }
    public function historyGetExecutions($params = array()) {
        return $this->request('executions', 'history', 'GET', $params, null, null, array());
    }
    public function historyGetTriggers($params = array()) {
        return $this->request('triggers', 'history', 'GET', $params, null, null, array());
    }
    public function historyGetAccountlogcsv($params = array()) {
        return $this->request('accountlogcsv', 'history', 'GET', $params, null, null, array());
    }
    public function historyGetMarketSymbolOrders($params = array()) {
        return $this->request('market/{symbol}/orders', 'history', 'GET', $params, null, null, array());
    }
    public function historyGetMarketSymbolExecutions($params = array()) {
        return $this->request('market/{symbol}/executions', 'history', 'GET', $params, null, null, array());
    }
    public function feeschedulesGetVolumes($params = array()) {
        return $this->request('volumes', 'feeschedules', 'GET', $params, null, null, array());
    }
}
