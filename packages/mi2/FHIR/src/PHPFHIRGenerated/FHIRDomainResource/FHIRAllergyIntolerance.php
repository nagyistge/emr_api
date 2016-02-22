<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAllergyIntolerance extends FHIRDomainResource
{
    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onset = null;

    /**
     * Date when the sensitivity was recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its conten.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The source of the information about the allergy that is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reporter = null;

    /**
     * Identification of a substance, or a class of substances, that is considered to be responsible for the adverse reaction risk.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $substance = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified Substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceStatus
     */
    public $status = null;

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified Substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public $criticality = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public $type = null;

    /**
     * Category of the identified Substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    public $category = null;

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastOccurence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Details about each adverse reaction event linked to exposure to the identified Substance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public $reaction = array();

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $onset
     */
    public function setOnset($onset)
    {
        $this->onset = $onset;
    }

    /**
     * Date when the sensitivity was recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * Date when the sensitivity was recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $recordedDate
     */
    public function setRecordedDate($recordedDate)
    {
        $this->recordedDate = $recordedDate;
    }

    /**
     * Individual who recorded the record and takes responsibility for its conten.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Individual who recorded the record and takes responsibility for its conten.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     */
    public function setRecorder($recorder)
    {
        $this->recorder = $recorder;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reporter
     */
    public function setReporter($reporter)
    {
        $this->reporter = $reporter;
    }

    /**
     * Identification of a substance, or a class of substances, that is considered to be responsible for the adverse reaction risk.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Identification of a substance, or a class of substances, that is considered to be responsible for the adverse reaction risk.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $substance
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified Substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified Substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified Substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified Substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     */
    public function setCriticality($criticality)
    {
        $this->criticality = $criticality;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Category of the identified Substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category of the identified Substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastOccurence()
    {
        return $this->lastOccurence;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $lastOccurence
     */
    public function setLastOccurence($lastOccurence)
    {
        $this->lastOccurence = $lastOccurence;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified Substance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified Substance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[] $reaction
     */
    public function addReaction($reaction)
    {
        $this->reaction[] = $reaction;
    }


}