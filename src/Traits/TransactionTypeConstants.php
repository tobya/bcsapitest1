<?php
        namespace Bcsapi\Traits; 
//This file is generated by running php Artisan BCS:GenerateConstFile 

//***********************************************************************************
//*  DO NOT EDIT THIS FILE - ALL CHANGES MUST BE MADE TO  
//*  tobya/bcsstudents_p4git app/Modules/Generator/Services/ConstantClassGeneratorService.php 
//***********************************************************************************
//*  ALL CHANGES TO THIS FILE WILL BE LOST WHEN NEXT GENERATED.
//***********************************************************************************
//*  Generated on:   23rd Feb 2025 06:54:46 

 


  trait TransactionTypeConstants
  {
        //TransactionTypes 
 // Payments   
      const P = 0; 
      const P_CODE = "P"; 

 // Credit Card Payment   
      const PCC = 1; 
      const PCC_CODE = "PCC"; 

 // Cash Payment   
      const CSH = 2; 
      const CSH_CODE = "CSH"; 

 // Cheque Payment   
      const PCHQ = 3; 
      const PCHQ_CODE = "PCHQ"; 

 // Voucher Payment   
      const PVOU = 4; 
      const PVOU_CODE = "PVOU"; 

 // Bank Transfer Payment   
      const BANK = 5; 
      const BANK_CODE = "BANK"; 

 // WRITE OFF (GIVE DETAILS)    
      const WOFF = 7; 
      const WOFF_CODE = "WOFF"; 

 // Payment from Old DB   
      const OLDP = 8; 
      const OLDP_CODE = "OLDP"; 

 // OldDB   
      const OLDDB3 = 9; 
      const OLDDB3_CODE = "OLDDB3"; 

 // Final Balancing  OLD DB   
      const FINALOLDDB = 10; 
      const FINALOLDDB_CODE = "FINALOLDDB"; 

 // Payment via ISPS   
      const ISPS = 11; 
      const ISPS_CODE = "ISPS"; 

 // Bank Refund Rejected   
      const BANKREJ = 12; 
      const BANKREJ_CODE = "BANKREJ"; 

 // American Express    
      const AMEX = 13; 
      const AMEX_CODE = "AMEX"; 

 // Voucher (Older)   
      const POLDVOU = 14; 
      const POLDVOU_CODE = "POLDVOU"; 

 // Other Payment (Give Details)   
      const OTHERP = 20; 
      const OTHERP_CODE = "OTHERP"; 

 // Realex Credit Card Payment Online   
      const RLX = 21; 
      const RLX_CODE = "RLX"; 

 // Charged to Ballymaloe Room Account   
      const BALLY = 22; 
      const BALLY_CODE = "BALLY"; 

 // Voucher (Promotional)   
      const FREEVOU = 23; 
      const FREEVOU_CODE = "FREEVOU"; 

 // Payment Direct to Slowfood   
      const DIRSLOW = 24; 
      const DIRSLOW_CODE = "DIRSLOW"; 

 // Ballymaloe House - Card Voucher   
      const VBALLY = 25; 
      const VBALLY_CODE = "VBALLY"; 

 // Charged to Garryvoe Room Account   
      const GARRYVOE = 26; 
      const GARRYVOE_CODE = "GARRYVOE"; 

 // Ballymaloe House Old Voucher   
      const VBALLYO = 27; 
      const VBALLYO_CODE = "VBALLYO"; 

 // Invoice Issued (Debtors Book) Use BookingID   
      const DEBTOR = 28; 
      const DEBTOR_CODE = "DEBTOR"; 

 // Discount   
      const DISCOUNT = 30; 
      const DISCOUNT_CODE = "DISCOUNT"; 

 // Staff Discount   
      const STAFFDISC = 31; 
      const STAFFDISC_CODE = "STAFFDISC"; 

 // Bursary Payment   
      const BURSARY = 32; 
      const BURSARY_CODE = "BURSARY"; 

 // Scholarship Payment   
      const SCHOLARSHIP = 33; 
      const SCHOLARSHIP_CODE = "SCHOLARSHIP"; 

 // CITYDEAL/GROUPON Voucher   
      const CITYDEAL = 40; 
      const CITYDEAL_CODE = "CITYDEAL"; 

 // Payment via Garden Shop   
      const CSHSHOP = 50; 
      const CSHSHOP_CODE = "CSHSHOP"; 

 // Cash GS   
      const CSHSHOP2 = 51; 
      const CSHSHOP2_CODE = "CSHSHOP2"; 

 // Stripe Credit Card Payment   
      const STRIPECC = 61; 
      const STRIPECC_CODE = "STRIPECC"; 

 // Wise Refund Rejected   
      const WIS_REJ = 70; 
      const WIS_REJ_CODE = "WIS_REJ"; 

 // Late Payment - Credit Card   
      const LP_PCC = 81; 
      const LP_PCC_CODE = "LP_PCC"; 

 // Late Payment - Cash   
      const LP_CSH = 82; 
      const LP_CSH_CODE = "LP_CSH"; 

 // Late Payment - Cheque   
      const LP_PCHQ = 83; 
      const LP_PCHQ_CODE = "LP_PCHQ"; 

 // Late Payment - Voucher   
      const LP_PVOU = 84; 
      const LP_PVOU_CODE = "LP_PVOU"; 

 // Late Payment - Bank Transfer   
      const LP_BANK = 85; 
      const LP_BANK_CODE = "LP_BANK"; 

 // Late Payment - GSHOP Payment   
      const LP_CSHSHOP = 86; 
      const LP_CSHSHOP_CODE = "LP_CSHSHOP"; 

 // Late Payment - OTHER   
      const LP_OTHERP = 87; 
      const LP_OTHERP_CODE = "LP_OTHERP"; 

 // Late Payment - Bank Refund Rejected   
      const LP_BANKREJ = 88; 
      const LP_BANKREJ_CODE = "LP_BANKREJ"; 

 // Late Payment - Voucher (Promotional)   
      const LP_FREEVOU = 89; 
      const LP_FREEVOU_CODE = "LP_FREEVOU"; 

 // Late Payment - Voucher (Older)   
      const LPOLDVOU = 90; 
      const LPOLDVOU_CODE = "LPOLDVOU"; 

 // Late Payment: WRITE OFF   
      const LP_WOFF = 91; 
      const LP_WOFF_CODE = "LP_WOFF"; 

 // Fees and Charges   
      const FEES = 100; 
      const FEES_CODE = "FEES"; 

 // Course Fee   
      const FEE = 101; 
      const FEE_CODE = "FEE"; 

 // Course Extras Total   
      const EXT = 102; 
      const EXT_CODE = "EXT"; 

 // Accomodation Total   
      const ACC = 103; 
      const ACC_CODE = "ACC"; 

 // Accom Extras Total   
      const AXT = 104; 
      const AXT_CODE = "AXT"; 

 // Breakages Deposit   
      const BREAK = 105; 
      const BREAK_CODE = "BREAK"; 

 // Cleaning Deposit   
      const CLEAN = 106; 
      const CLEAN_CODE = "CLEAN"; 

 // Transfered Out   
      const TRANSFER = 200; 
      const TRANSFER_CODE = "TRANSFER"; 

 // Course Payment Transfer   
      const CPT = 201; 
      const CPT_CODE = "CPT"; 

 // Inter Student Transfer   
      const IST = 202; 
      const IST_CODE = "IST"; 

 // Transfer Out from Old Database   
      const OLDTRANSOUT = 203; 
      const OLDTRANSOUT_CODE = "OLDTRANSOUT"; 

 // Credit Account Payment Transfer   
      const CREDITTRANS = 204; 
      const CREDITTRANS_CODE = "CREDITTRANS"; 

 // Voucher Transfer   
      const VTOUT = 205; 
      const VTOUT_CODE = "VTOUT"; 

 // Cancellations   
      const CX = 300; 
      const CX_CODE = "CX"; 

 // Student Cancelled   
      const SCX = 301; 
      const SCX_CODE = "SCX"; 

 // Course Cancelled   
      const CCX = 302; 
      const CCX_CODE = "CCX"; 

 // Student Cancelled No Refund   
      const CXNR = 303; 
      const CXNR_CODE = "CXNR"; 

 // Refunds   
      const REF = 400; 
      const REF_CODE = "REF"; 

 // Credit Card Reimbursement   
      const CC_REF = 401; 
      const CC_REF_CODE = "CC_REF"; 

 // Cheque Refund   
      const CHQ_REF = 402; 
      const CHQ_REF_CODE = "CHQ_REF"; 

 // Cash Refund   
      const CSH_REF = 403; 
      const CSH_REF_CODE = "CSH_REF"; 

 // Refund Breakages Deposit   
      const RBREAK = 405; 
      const RBREAK_CODE = "RBREAK"; 

 // Refund Cleaning Deposit   
      const REF_CLEAN = 406; 
      const REF_CLEAN_CODE = "REF_CLEAN"; 

 // Bank Refund   
      const REF_BANK = 407; 
      const REF_BANK_CODE = "REF_BANK"; 

 // Transferwise Refund   
      const REF_TRANWISE = 408; 
      const REF_TRANWISE_CODE = "REF_TRANWISE"; 

 // Realex Reimbursement   
      const REF_REALEX = 409; 
      const REF_REALEX_CODE = "REF_REALEX"; 

 // Refunded as Voucher (Record Number)   
      const REF_VOU = 410; 
      const REF_VOU_CODE = "REF_VOU"; 

 // Realex Credit Card Refund   
      const REF_CCRX = 411; 
      const REF_CCRX_CODE = "REF_CCRX"; 

 // Transferwise Balance Refund   
      const REF_WISEBAL = 412; 
      const REF_WISEBAL_CODE = "REF_WISEBAL"; 

 // Stripe Refund   
      const REF_STRIPE = 413; 
      const REF_STRIPE_CODE = "REF_STRIPE"; 

 // Shop Credit Refund   
      const REF_CREDIT = 415; 
      const REF_CREDIT_CODE = "REF_CREDIT"; 

 // Other Refund (Give Details)   
      const REF_OTHER = 420; 
      const REF_OTHER_CODE = "REF_OTHER"; 

 // Refund to Ballymaloe House   
      const REF_BHOUSE = 430; 
      const REF_BHOUSE_CODE = "REF_BHOUSE"; 

 // Refund to Ballymaloe Shop   
      const REF_BSHOP = 431; 
      const REF_BSHOP_CODE = "REF_BSHOP"; 

 // Refund to Ballymaloe Foods   
      const REF_BFOODS = 432; 
      const REF_BFOODS_CODE = "REF_BFOODS"; 

 // Refund to Garden Shop   
      const REF_GSHOP = 433; 
      const REF_GSHOP_CODE = "REF_GSHOP"; 

 // Transfered In   
      const TRANREC = 500; 
      const TRANREC_CODE = "TRANREC"; 

 // Course Payment Transfer Recipient   
      const CSETREC = 501; 
      const CSETREC_CODE = "CSETREC"; 

 // Inter Student Transfer Recipient   
      const ISTREC = 502; 
      const ISTREC_CODE = "ISTREC"; 

 // Transfer In from Old Database   
      const OLDTRANSIN = 503; 
      const OLDTRANSIN_CODE = "OLDTRANSIN"; 

 // Credit Account Payment Recipient   
      const CREDITREC = 504; 
      const CREDITREC_CODE = "CREDITREC"; 

 // Voucher Transfer In   
      const VTIN = 505; 
      const VTIN_CODE = "VTIN"; 

 // Charges   
      const CHG = 600; 
      const CHG_CODE = "CHG"; 

 // Sundry (Give Details)   
      const SNDR = 602; 
      const SNDR_CODE = "SNDR"; 

 // Sundry Amount Old DB   
      const SNDROLDDB = 603; 
      const SNDROLDDB_CODE = "SNDROLDDB"; 

 // WRITE ON   
      const WON = 604; 
      const WON_CODE = "WON"; 

 // Cancellation Charge   
      const CHG_CANCEL = 610; 
      const CHG_CANCEL_CODE = "CHG_CANCEL"; 

 // Ballymaloe Package   
      const BALLYPACK = 620; 
      const BALLYPACK_CODE = "BALLYPACK"; 

 // Shop Account   
      const SHOP = 621; 
      const SHOP_CODE = "SHOP"; 

 // Purchase In Shop   
      const SHOPPUR = 622; 
      const SHOPPUR_CODE = "SHOPPUR"; 

 // Voucher Purchase   
      const BUY_VOUCHER = 630; 
      const BUY_VOUCHER_CODE = "BUY_VOUCHER"; 

 // CyberMonday Discount Reversal   
      const CMD_REVERSE = 635; 
      const CMD_REVERSE_CODE = "CMD_REVERSE"; 


    }
    