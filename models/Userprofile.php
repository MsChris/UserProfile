<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $ID
 * @property string $Profile_Picture
 * @property string $Full_Name
 * @property string $Gender
 * @property string $Date_Of_Birth
 * @property string $Years_Of_Experience
 * @property string $Industry
 * @property string $Location
 * @property string $About_Me
 * @property string $Professional_Title
 * @property string $Career_Level
 * @property string $Communication_Level
 * @property string $Organizational_Level
 * @property string $Job_Related_Level
 * @property string $Address
 * @property string $Phone_Number
 * @property string $Website
 * @property string $Email
 */
class Userprofile extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Profile_Picture', 'Full_Name', 'Gender', 'Date_Of_Birth', 'Years_Of_Experience', 'Industry', 'Location', 'About_Me', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Organizational_Level', 'Job_Related_Level', 'Address', 'Phone_Number', 'Website', 'Email'], 'required'],
            [['Date_Of_Birth'], 'safe'],
            [['Profile_Picture', 'Full_Name', 'Gender', 'Years_Of_Experience', 'Industry', 'Location', 'About_Me', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Organizational_Level', 'Job_Related_Level', 'Address', 'Phone_Number', 'Website', 'Email'], 'string', 'max' => 50],
            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
//            'Profile_Picture' => 'Profile  Picture',
            'file' => 'Profile Picture',
            'Full_Name' => 'Full  Name',
            'Gender' => 'Gender',
            'Date_Of_Birth' => 'Date  Of  Birth',
            'Years_Of_Experience' => 'Years  Of  Experience',
            'Industry' => 'Industry',
            'Location' => 'Location',
            'About_Me' => 'About  Me',
            'Professional_Title' => 'Professional  Title',
            'Career_Level' => 'Career  Level',
            'Communication_Level' => 'Communication  Level',
            'Organizational_Level' => 'Organizational  Level',
            'Job_Related_Level' => 'Job  Related  Level',
            'Address' => 'Address',
            'Phone_Number' => 'Phone  Number',
            'Website' => 'Website',
            'Email' => 'Email',
        ];
    }
}
