<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 22nd, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseAddItem extends FHIRBackboneElement
{
    /**
     * List of input service items which this service line is intended to replace.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $sequenceLinkId = array();

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $service = null;

    /**
     * The fee charged for the professional service or product..
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $fee = null;

    /**
     * A list of note references to the notes provided below.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumberLinkId = array();

    /**
     * The adjudications results.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
     */
    public $adjudication = array();

    /**
     * The second tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public $detail = array();

    /**
     * List of input service items which this service line is intended to replace.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getSequenceLinkId()
    {
        return $this->sequenceLinkId;
    }

    /**
     * List of input service items which this service line is intended to replace.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[] $sequenceLinkId
     */
    public function addSequenceLinkId($sequenceLinkId)
    {
        $this->sequenceLinkId[] = $sequenceLinkId;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * The fee charged for the professional service or product..
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * The fee charged for the professional service or product..
     * @param \PHPFHIRGenerated\FHIRMoney $fee
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    /**
     * A list of note references to the notes provided below.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumberLinkId()
    {
        return $this->noteNumberLinkId;
    }

    /**
     * A list of note references to the notes provided below.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[] $noteNumberLinkId
     */
    public function addNoteNumberLinkId($noteNumberLinkId)
    {
        $this->noteNumberLinkId[] = $noteNumberLinkId;
    }

    /**
     * The adjudications results.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * The adjudications results.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication3[] $adjudication
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
    }

    /**
     * The second tier service adjudications for payor added services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * The second tier service adjudications for payor added services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[] $detail
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
    }


}